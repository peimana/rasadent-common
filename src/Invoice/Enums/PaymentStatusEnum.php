<?php

namespace Rasadent\Common\Invoice\Enums;

enum PaymentStatusEnum: int
{
    case NOT_PAID = 0;
    case PAID = 1;
    case GATHERING = 2;
}
