<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;

class InfoController extends Controller
{
    public function getTimeAndInfo()
    {
        $info = Time::orderBy('created_at', 'DESC')->first();
        return $info;
    }

    public function saveTime(Request $request)
    {
        Time::create(['days' => $request->input('days'), 'seconds' => $request->input('seconds'), 'info' => $request->input('info')]);
        $info = Time::orderBy('created_at', 'DESC')->first();
        return $info;
    }
}
