<?php

namespace Rasadent\Common\Notification\Enums;

enum NotifiactionEventKey: string {
    case CREDIT_REQUEST_CREATED = 'credit_request_created';
    case TICKET_CREATED = 'ticket_created';
}
