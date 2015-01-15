<?php namespace App\Libraries\FlashMessages\Facades;

use Illuminate\Support\Facades\Facade;

class FlashMessages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flash_messages';
    }
}