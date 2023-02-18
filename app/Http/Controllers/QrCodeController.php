<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function text()
    {
        return view('text');
    }

    public function email()
    {
        return view('email');
    }

    public function phone()
    {
        return view('phone');
    }

    public function result(Request $request)
    {
        $data =  $request->validate([
            "text" => "nullable|string",
            "phone" => "nullable|numeric",
            "email" => "nullable|email",
        ]);

        if (!is_null($data['text'])) {
            $result = QrCode::size(300)->generate($data['text']);
            return view('result', compact('result'));
        } elseif (!is_null($data['phone'])) {
            $result = QrCode::size(300)->phoneNumber($data['phone']);
            return view('result', compact('result'));
        } else {
            $result = QrCode::size(300)
                ->email($data['email'], 'Subject', 'Body');
            return view('result', compact('result'));
        }
    }
}
