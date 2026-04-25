<?php

namespace Rasadent\Common\Invoice\Enums;

enum PaymentMethodEnum: string
{
    case ONLINE = 'O';
    case IN_PERSON = 'P';
}
