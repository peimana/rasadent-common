<?php

namespace Rasadent\Common\Jet\Enums;

enum JetStatusEnum: string
{
    case WAITING_FOR_OPERATOR = 'WAITING_FOR_OPERATOR';
    case WAITING_FOR_VENDOR = 'WAITING_FOR_VENDOR';
    case WAITING_FOR_PAYMENT = 'WAITING_FOR_PAYMENT';
    case DONE = 'DONE';
}
