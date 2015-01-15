<?php namespace Newway\FlashMessages;

use Illuminate\Support\ServiceProvider;

class FlashMessagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('flash_messages', 'Newway\FlashMessages\FlashMessages');
    }
}