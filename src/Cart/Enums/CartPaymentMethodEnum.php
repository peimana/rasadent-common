<?php

namespace Rasadent\Common\Cart\Enums;

enum CartPaymentMethodEnum: string
{
    case ONLINE = 'online';
    case WALLET = 'wallet';
    case MANUAL = 'manual';
}
