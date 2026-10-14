<?php

namespace Rasadent\Common\Invoice\Enums;

enum PaymentStatusEnum: int
{
    /**
     * Unpaid / awaiting payment initiation
     */
    case NOT_PAID = 0;

    /**
     * Successfully paid
     */
    case PAID = 1;

    /**
     * Payment attempt failed
     */
    case FAILED = 2;

    /**
     * Payment has been refunded
     */
    case REFUNDED = 3;

    public function label(): string
    {
        return match ($this) {
            self::NOT_PAID => 'پرداخت نشده',
            self::PAID => 'پرداخت شده',
            self::FAILED => 'پرداخت ناموفق',
            self::REFUNDED => 'مرجوع شده',
        };
    }

    public function isPaid(): bool
    {
        return $this === self::PAID;
    }

    public function isFinal(): bool
    {
        return in_array($this, [
            self::PAID,
            self::REFUNDED,
        ], true);
    }
}
