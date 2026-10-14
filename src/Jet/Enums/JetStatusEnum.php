<?php

namespace Rasadent\Common\Jet\Enums;

enum JetStatusEnum: string
{
    case EXPIRED = 'EXPIRED';
    case WAITING_FOR_OPERATOR = 'WAITING_FOR_OPERATOR';
    case WAITING_FOR_VENDOR = 'WAITING_FOR_VENDOR';
    case WAITING_FOR_CLIENT = 'WAITING_FOR_CLIENT';
    case DONE = 'DONE';

    public function label(): string
    {
        return match ($this) {
            self::EXPIRED => 'منقضی شده',
            self::WAITING_FOR_OPERATOR => 'در انتظار اپراتور',
            self::WAITING_FOR_VENDOR => 'در انتظار فروشنده',
            self::WAITING_FOR_CLIENT => 'در انتظار مشتری',
            self::DONE => 'انجام شده',
        };
    }

    public static function tryFromLegacy(mixed $value): ?self
    {
        if ($value instanceof self) {
            return $value;
        }

        $stringVal = (string) $value;

        return match ($stringVal) {
            'EXPIRED' => self::EXPIRED,
            'WAITING_FOR_OPERATOR' => self::WAITING_FOR_OPERATOR,
            'WAITING_FOR_VENDOR' => self::WAITING_FOR_VENDOR,
            'WAITING_FOR_PAYMENT', 'WAITING_FOR_CLIENT' => self::WAITING_FOR_CLIENT,
            'DONE' => self::DONE,
            default => null,
        };
    }
}
