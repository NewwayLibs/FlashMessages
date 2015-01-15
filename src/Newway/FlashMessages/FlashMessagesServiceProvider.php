<?php namespace App\Libraries\FlashMessages;

use Illuminate\Support\ServiceProvider;

class FlashMessagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('flash_messages', 'App\Libraries\FlashMessages\FlashMessages');
    }
}