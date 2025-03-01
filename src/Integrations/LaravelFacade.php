<?php
namespace Dusterio\LinkPreview\Integrations;

use Illuminate\Support\Facades\Facade;

class LaravelFacade extends Facade
{
    /**
     * Name of the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'link-preview';
    }
}
