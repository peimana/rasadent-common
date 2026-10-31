<?php

namespace Rasadent\Common\Invoice\Enums;

enum InvoiceTypeEnum: string
{
    case NORMAL = 'normal';
    case JET = 'jet';

    public function label(): string
    {
        return match ($this) {
            self::NORMAL => 'عادی',
            self::JET => 'جت',
        };
    }
}