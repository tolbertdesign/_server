<?php

namespace App\Providers;

use Postmark\Transport;
use Illuminate\Mail\MailServiceProvider;

class PostmarkServiceProvider extends MailServiceProvider
{
    /**
     * Extended register the Swift Transport instance.
     *
     * @return void
     */
    protected function registerSwiftTransport()
    {
        parent::registerSwiftTransport();

        $this->app['swift.transport']->extend('postmark', function($app) {
            return new Transport(
                config('services.postmark.token')
            );
        });
    }
}
