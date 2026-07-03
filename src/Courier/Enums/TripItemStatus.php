<?php

namespace Rasadent\Common\Courier\Enums;


enum TripItemStatus: string
{
    case WAITING = 'waiting';
    case RECEIVED_BY_COURIER = 'received_by_courier';
    case DELIVERED_TO_RASADENT = 'delivered_to_rasadent';
}
