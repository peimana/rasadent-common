<?php

namespace Rasadent\Common\Ticket\Enums;

enum TicketDepartmentEnum: string
{
    case SALES_AND_ORDERS = 'sales_and_orders';
    case RASA_CHORTKEH = 'rasa_chortkeh';
    case RASA_ADS = 'rasa_ads';
    case SUPPLIERS = 'suppliers';

    public function label(): string
    {
        return match ($this) {
            self::SALES_AND_ORDERS => 'واحد فروش و پشتیبانی سفارشات',
            self::RASA_CHORTKEH => 'پشتیبانی رساچرتکه',
            self::RASA_ADS => 'پشتیبانی رسا ادز',
            self::SUPPLIERS => 'پشتیبانی تامین کنندگان',
        };
    }

    public static function options(): array
    {
        return array_map(fn (self $case) => [
            'value' => $case->value,
            'label' => $case->label(),
        ], self::cases());
    }
}
