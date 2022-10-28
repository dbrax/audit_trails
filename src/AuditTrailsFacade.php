<?php

namespace Epmnzava\AuditTrails;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\AuditTrails\Skeleton\SkeletonClass
 */
class AuditTrailsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'audit_trails';
    }
}
