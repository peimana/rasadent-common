<?php

namespace Rasadent\Common\Bid\Enums;


enum BidStatusEnum: string
{
    case WAITING_FOR_PRICE = 'waiting_for_price';
    case OPEN = 'open';
    case CLOSED = 'closed';
    case WON = 'won';
    case REJECTED = 'rejected';
}
