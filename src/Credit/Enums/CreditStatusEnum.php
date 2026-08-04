<?php


namespace Rasadent\Common\Credit\Enums;

enum CreditStatusEnum: string
{
    case WAITING_FOR_OPERATOR = 'waiting_for_operator';
    case AUTHORIZED = 'authorized';
    case CREDIT_CHECKED = 'credit_checked';
    case INVOICE_CREATED = 'invoice_created';
}
