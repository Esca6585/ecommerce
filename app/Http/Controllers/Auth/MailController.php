<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\RegisterEmail;
use Mail;

class MailController extends Controller
{
    public static function sendRegisterEmail($name, $email, $verification_code)
    {
        $rand = mt_rand(100000, 999999);

        $data = [
            'name' => $name,
            'email' => $email,
            'verification_code' => $rand,
            'strRand' => strval($rand),
        ];

        Mail::to($email)->send(new RegisterEmail($data));
    }
}
