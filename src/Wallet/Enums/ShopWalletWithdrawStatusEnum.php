<?php

namespace Rasadent\Common\Wallet\Enums;

enum ShopWalletWithdrawStatusEnum: int
{
    case WAITING = 0;
    case APPROVED = 1;
    case REJECTED = -1;
}
