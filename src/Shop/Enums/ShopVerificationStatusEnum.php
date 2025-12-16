<?php

namespace Rasadent\Common\Shop\Enums;

enum ShopVerificationStatusEnum: string
{
    case WAITING = 'waiting';
    case PENDING = 'pending';
    case REJECTED = 'rejected';
    case APPROVED = 'approved';
}
