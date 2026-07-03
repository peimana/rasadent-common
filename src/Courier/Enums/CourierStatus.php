<?php

namespace Rasadent\Common\Courier\Enums;

enum CourierStatus: string
{
    case WAITING_FOR_REGISTER = 'WAITING_FOR_REGISTER';
    case ACTIVE = 'ACTIVE';
    case BANNED = 'BANNED';
}
