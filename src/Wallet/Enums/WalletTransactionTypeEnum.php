<?php

namespace Rasadent\Common\Wallet\Enums;

enum WalletTransactionTypeEnum: int
{
    case WAITING = 0;
    case APPROVED = 1;
    case REJECTED = -1;
}
