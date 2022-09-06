<?php

namespace Laravoltech\Laravoltech;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laravoltech\Laravoltech\Skeleton\SkeletonClass
 */
class LaravoltechFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravoltech';
    }
}
