<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Password;


class PasswordController extends Controller
{
    public function index () {
        return view('password');
    }

    public function generate ($shift, $letters, $numbers, $punctuation, $special, $reach) {

        $p = new Password();
        $p->setOptions(['shift' => $shift,
                       'reach' => $reach,
                       'letter' => $letters,
                       'number' => $numbers,
                       'punctuation' => $punctuation,
                       'special' => $special,
                       ]);


        $code = $p->generate();

        return $code;
    }



}
