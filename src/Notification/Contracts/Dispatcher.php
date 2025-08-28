<?php

namespace Rasadent\Common\Notification\Contracts;

use Rasadent\Common\Notification\Enums\NotifiactionEventKey;

interface Dispatcher
{
    /**
     * Dispatch a notification for a given event.
     *
     * @param NotificationEventKey $eventKey The event that was triggered.
     * @param array $params The data payload for the template.
     * @return void
     */
    public function dispatch(NotifiactionEventKey $eventKey, array $params): void;
}
