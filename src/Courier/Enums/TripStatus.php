<?php

namespace Rasadent\Common\Courier\Enums;


enum TripStatus: string
{
    case WAITING_TO_ACCEPT = 'waiting_to_acccept';
    case ONGOING = 'ongoing';
    case DONE = 'done';
    case CANCELED = 'canceled';
}
