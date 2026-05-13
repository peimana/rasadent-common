<?php

namespace Rasadent\Common\Auction\Enums;


enum AuctionStatusEnum: string
{
    /**
     * Waiting for user to select a bid
     */
    case WAITING = 'waiting';

    /**
     * User didn't select any bid from this auction
     */
    case CANCELED = 'canceled';

    /**
     * User accepted a bid from this auction
     */
    case DONE = 'done';
}