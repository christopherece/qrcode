<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;



class QrCodeController extends Controller
{
    //
    public function qr(){
        $q = QrCode::wiFi([
            'encryption' => 'WPA2',
            'ssid' => 'Scan Me QrCode',
            'password' => '!pass1234',
            'hidden' => 'true'
        ]);
        return view('qrcode', compact('q'));
    }
}
