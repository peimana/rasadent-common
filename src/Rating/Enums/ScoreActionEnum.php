<?php

namespace Rasadent\Common\Rating\Enums;

enum ScoreActionEnum: string
{
    // Stock
    case STOCK_UPDATE_SUCCESS = 'stock_update_success';
    case STOCK_EXPIRED = 'stock_expired';

    // Invoice
    case INVOICE_DELIVERED_ON_TIME = 'invoice_delivered_on_time';
    case INVOICE_CANCELED = 'invoice_canceled';
    case INVOICE_EXTENDED_DEADLINE = 'invoice_extended_deadline';

    // Jet
    case JET_BID_RESPONDED = 'jet_bid_responded';
    case JET_BID_NO_RESPONSE = 'jet_bid_no_response';
}
