<?php

namespace Rasadent\Common\Bid\Enums;


enum BidStatusEnum: string
{
    /**
     * Bid is waiting for vendor to set the price
     */
    case WAITING_FOR_PRICE = 'waiting_for_price';

    /**
     * Price has been set by vendor, waiting for user to accept/reject the bid
     */
    case OPEN = 'open';

    /**
     * Bid has been rejected by vendor and vendor didn't set the price
     */
    case REJECTED = 'rejected';

    /**
     * User accepted another bid from another vendor and this bid isn't accepted by the user
     */
    case CLOSED = 'closed';

    /**
     * User accepted this bid
     */
    case WON = 'won';
}
