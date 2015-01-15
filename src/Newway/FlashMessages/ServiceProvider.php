<?php namespace Newway\FlashMessages;

use Illuminate\Support\ServiceProvider as SP;

class ServiceProvider extends SP
{
    public function register()
    {
        $this->app->bind('flash_messages', 'Newway\FlashMessages\FlashMessages');
    }
}