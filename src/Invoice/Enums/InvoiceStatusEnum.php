<?php

namespace Rasadent\Common\Invoice\Enums;

enum InvoiceStatusEnum: string
{
    /**
     * Initial draft order or checkout stage
     */
    case DRAFT = 'draft';

    /**
     * Order confirmed, items being approved/gathered from vendors
     */
    case PROCESSING = 'processing';

    /**
     * Dispatched and in transit to customer
     */
    case SHIPPED = 'shipped';

    /**
     * Order fulfilled and delivered to customer
     */
    case DELIVERED = 'delivered';

    /**
     * Order cancelled by customer or admin
     */
    case CANCELLED = 'cancelled';

    /**
     * Issue detected (e.g. vendor rejected item), requires admin inspection
     */
    case ON_HOLD = 'on_hold';

    /**
     * Draft or unpaid order expired after timeout
     */
    case EXPIRED = 'expired';

    public function label(): string
    {
        return match ($this) {
            self::DRAFT => 'پیش‌نویس',
            self::PROCESSING => 'در حال پردازش',
            self::SHIPPED => 'ارسال شده',
            self::DELIVERED => 'تحویل داده شده',
            self::CANCELLED => 'لغو شده',
            self::ON_HOLD => 'نیازمند بررسی',
            self::EXPIRED => 'منقضی شده',
        };
    }

    public function isFinal(): bool
    {
        return in_array($this, [
            self::DELIVERED,
            self::CANCELLED,
            self::EXPIRED,
        ], true);
    }

    public function isActive(): bool
    {
        return in_array($this, [
            self::PROCESSING,
            self::SHIPPED,
            self::ON_HOLD,
        ], true);
    }

    public function canBeCancelled(): bool
    {
        return in_array($this, [
            self::DRAFT,
            self::PROCESSING,
            self::ON_HOLD,
        ], true);
    }

    /**
     * Map legacy status strings/ints to the new clean lifecycle status.
     */
    public static function fromLegacy(string|int $legacyStatus): self
    {
        return self::tryFromLegacy($legacyStatus)
            ?? throw new \ValueError("Unknown legacy invoice status: '{$legacyStatus}'");
    }

    /**
     * Safely attempt to map a legacy status string/int to the new clean lifecycle status.
     */
    public static function tryFromLegacy(mixed $value): ?self
    {
        if ($value instanceof self) {
            return $value;
        }

        $stringVal = (string) $value;

        return match ($stringVal) {
            // Modern values
            'draft' => self::DRAFT,
            'processing' => self::PROCESSING,
            'shipped' => self::SHIPPED,
            'delivered' => self::DELIVERED,
            'cancelled' => self::CANCELLED,
            'on_hold' => self::ON_HOLD,
            'expired' => self::EXPIRED,

            // Legacy mappings:
            // "0" = INITIALIZE, "1" = WAITING_PAYMENT, "7" = PRE_INVOICE, JET_*
            '0', 'INITIALIZE', '1', 'WAITING_PAYMENT', '7', 'PRE_INVOICE',
            'JET_WAITING_FOR_OPERATOR',
            'JET_WAITING_FOR_ANY_VENDOR_TO_SETTLE_BID',
            'JET_WAITING_FOR_USER_TO_ACCEPT_BIDS',
            'JET_WAITING_FOR_PAYMENT',
            'JET_PAYMENT_LINK_SENT_TO_USER' => self::DRAFT,

            // "2" = WAITING_SHOP, "3" = CONFIRMED, "WAITING_FOR_COURIER", "4" = COLLECTING, "8" = READY_TO_SEND
            '2', 'WAITING_SHOP', '3', 'CONFIRMED', 'WAITING_FOR_COURIER', '4', 'COLLECTING', '8', 'READY_TO_SEND' => self::PROCESSING,

            // "5" = SENDING
            '5', 'SENDING' => self::SHIPPED,

            // "6" = COMPLETED, "completed"
            '6', 'COMPLETED', 'completed' => self::DELIVERED,

            // "-3" = CANCELED, "-1" = FAILED
            '-3', 'CANCELED', '-1', 'FAILED' => self::CANCELLED,

            // "-2" = PENDING
            '-2', 'PENDING' => self::ON_HOLD,

            // "EXPIRED"
            'EXPIRED' => self::EXPIRED,

            default => null,
        };
    }
}
