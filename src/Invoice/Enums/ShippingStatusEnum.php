<?php

namespace Rasadent\Common\Invoice\Enums;

enum ShippingStatusEnum: string
{
    /**
     * Courier trip generated, awaiting courier acceptance
     */
    case WAITING_FOR_COURIER = 'waiting_for_courier';

    /**
     * Courier accepted trip, collecting goods from vendor shops
     */
    case COLLECTING = 'collecting';

    /**
     * Goods collected and delivered to Rasadent hub/warehouse
     */
    case DELIVERED_TO_HUB = 'delivered_to_hub';

    public function label(): string
    {
        return match ($this) {
            self::WAITING_FOR_COURIER => 'در انتظار پذیرش پیک',
            self::COLLECTING => 'در حال جمع‌آوری از فروشگاه‌ها',
            self::DELIVERED_TO_HUB => 'تحویل داده شده به انبار/هاب',
        };
    }

    public function isInProgress(): bool
    {
        return in_array($this, [
            self::WAITING_FOR_COURIER,
            self::COLLECTING,
        ], true);
    }

    public function isDeliveredToHub(): bool
    {
        return $this === self::DELIVERED_TO_HUB;
    }
}
