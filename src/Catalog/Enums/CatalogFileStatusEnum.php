<?php

namespace Rasadent\Common\Catalog\Enums;

enum CatalogFileStatusEnum: string
{
    case WAITING = 'waiting';
    case IN_PROGRESS = 'in_progress';
    case PROCESSED = 'processed';
    case INVALID = 'invalid';
}
