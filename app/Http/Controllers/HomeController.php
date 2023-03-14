<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingCarousel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $carousel = SettingCarousel::where('deleted_at', null)->where('status',1)->get();
        return view('welcome', compact('carousel'));
    }
}
