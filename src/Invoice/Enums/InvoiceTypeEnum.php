<?php

namespace Rasadent\Common\Invoice\Enums;

enum InvoiceTypeEnum: string
{
    case NORMAL = 'normal';
    case JET = 'jet';
    case PRE_INVOICE = 'pre_invoice';

    public function label(): string
    {
        return match ($this) {
            self::NORMAL => 'عادی',
            self::JET => 'جت',
            self::PRE_INVOICE => 'پیش‌فاکتور',
        };
    }
}