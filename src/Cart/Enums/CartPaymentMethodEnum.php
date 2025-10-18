<?php

namespace Rasadent\Cart\Notification\Enums;

enum CartPaymentMethodEnum: string
{
    case ONLINE = 'online';
    case WALLET = 'wallet';
    case MANUAL = 'manual';
}
