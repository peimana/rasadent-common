<?php

namespace Rasadent\Common\Invoice\Enums;

enum InvoiceDetailStatusEnum: int
{
    /**
     * no update in the last 7 days
     */
    case EXPIRED = -2;

    /*
    * When a shop rejects an item
    */
    case REJECTED = -1;

    /*
     * For an item that is just created which has no status
     */
    case WAITING = 0;

    /*
     * When a shop accepts an order item
     */
    case APPROVED = 1;

    /*
     * When item is received by rasadent and is getting prepared to send
     */
    case PREPARING = 2;

    /*
     * when item is delivered to courier to send
     */
    case SENT = 3;
}
