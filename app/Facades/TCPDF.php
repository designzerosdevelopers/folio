<?php
// app/Facades/TCPDF.php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TCPDF extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tcpdf';
    }
}


