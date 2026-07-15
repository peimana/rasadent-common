<?php

namespace Rasadent\Common\Invoice\Enums;

enum InvoiceStatusEnum: string
{
    /**
     * waiting for operator to create auctions based on jet
     */
    case JET_WAITING_FOR_OPERATOR = 'JET_WAITING_FOR_OPERATOR';

    /**
     * waiting for any vendor to put price on bids created for the auctions in the jet
     */
    case JET_WAITING_FOR_ANY_VENDOR_TO_SETTLE_BID = 'JET_WAITING_FOR_ANY_VENDOR_TO_SETTLE_BID';

    /**
     * waiting for user to accept bids from vendors
     */
    case JET_WAITING_FOR_USER_TO_ACCEPT_BIDS = 'JET_WAITING_FOR_USER_TO_ACCEPT_BIDS';

    /**
     * user has selected bids, the invoice items are created, now we are waiting for user to pay
     */
    case JET_WAITING_FOR_PAYMENT = 'JET_WAITING_FOR_PAYMENT';

    /**
     * canceled invoice by user or admin
     */
    case CANCELED = "-3";

    /**
     * Orders with a problem that need to be inspected by the admin
     */
    case PENDING = "-2";

    /**
     * Orders that has a failed payment
     */
    case FAILED = "-1";

    /**
     * Just created order which has no status
     */
    case INITIALIZE = "0";

    /**
     * For offline payment when user enters a tracking number, payment should be verified by admin
     */
    case WAITING_PAYMENT = "1";

    /**
     * After payment is verified by admin or automatically verified by gateway - It is waiting for shops to accept the order
     */
    case WAITING_SHOP = "2";

    /**
     * After all shops approved the order items
     */
    case CONFIRMED = "3";

    /**
     * Waiting for a courier to accept trip
     */
    case WAITING_FOR_COURIER = "WAITING_FOR_COURIER";

    /**
     * When a order needs to change and add more products to it
     */
    case COLLECTING = "4";

    /**
     * When order is sent to the client
     */
    case SENDING = "5";

    /**
     * Order is finished
     */
    case COMPLETED = "6";


    /**
     * PreInvoice is created by the admin and now the inquiry department is checking the stocks
     */
    case PRE_INVOICE = "7";

    /**
     * After PreInvoice is created by the admin, And inquiry department has checked the stocks, the invoice is ready to be sent to the user
     */
    case READY_TO_SEND = "8";
}
