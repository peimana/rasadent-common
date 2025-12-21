<?php

namespace Rasadent\Common\Catalog\Enums;

enum CatalogFileStatusEnum: string
{
    case WAITING = 'waiting';
    case PROCESSED = 'processed';
    case INVALID = 'invalid';
}
