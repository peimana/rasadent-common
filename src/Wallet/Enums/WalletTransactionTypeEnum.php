<?php

namespace Rasadent\Common\Wallet\Enums;

enum WalletTransactionTypeEnum: int
{
    case DEPOSIT = 1;
    case WITHDRAW = -1;
}
