<?php

namespace Rasadent\Common\Bid\Enums;


enum BidStatusEnum: string
{
    /**
     * Bid is waiting for vendor to settle the price
     */
    case WAITING_FOR_PRICE = 'waiting_for_price';

    /**
     * Price has been settled by vendor, waiting for user to accept/reject the bid
     */
    case OPEN = 'open';

    /**
     * Bid has been rejected by vendor (no price has been set by vendor)
     */
    case REJECTED = 'rejected';

    /**
     * User accepted another bid from the auction
     */
    case CLOSED = 'closed';

    /**
     * User accepted this bid
     */
    case WON = 'won';

    /**
     * Bid has expired after 24 hours without getting finalized
     */
    case EXPIRED = 'expired';
}
