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
     * User has selected all the bids and clicked on the proceed button. 
     */
    case WAITING_FOR_PAYMENT = 'waiting_for_payment';

    /**
     * User accepted a bid from this auction
     */
    case DONE = 'done';
}