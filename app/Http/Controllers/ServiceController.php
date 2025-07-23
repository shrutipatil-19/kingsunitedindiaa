<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function livePerformance(){
        return view('pages/services/livePerformance');
    }
}
