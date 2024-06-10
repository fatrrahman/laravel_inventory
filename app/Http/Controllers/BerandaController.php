<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        $data = array(
            'title' => "beranda"
        );

        return view('beranda', $data);
    }
}
