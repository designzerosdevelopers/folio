<?php

// app/Providers/TCPDFServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCPDF;

class TCPDFServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(TCPDF::class, function ($app) {
            return new TCPDF();
        });
    }

    public function boot()
    {
        //
    }
}
