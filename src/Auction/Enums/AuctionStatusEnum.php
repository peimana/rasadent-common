<?php

namespace Rasadent\Common\Auction\Enums;


enum AuctionStatusEnum: string
{
    case WAITING = 'waiting';
    case CANCELED = 'canceled';
    case DONE = 'done';
}