<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Generator;
use Illuminate\Http\Request;

class qrcodeController extends Controller
{
    public function index(){

        $qrcode = new Generator;
        $test = bcrypt('RWdsdshdsdrSD012121');
        $qr = $qrcode->backgroundColor(106, 90, 205)->size(200)->generate($test);

        return $qr;

     
      



    }
}
