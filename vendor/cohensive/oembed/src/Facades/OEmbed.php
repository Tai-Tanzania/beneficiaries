<?php
namespace Cohensive\OEmbed\Facades;

use Illuminate\Support\Facades\Facade;

class OEmbed extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'oembed'; }
}
