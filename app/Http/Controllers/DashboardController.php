<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    function index()
    {
        $userId = Session::get('username');
        return view('dashboard/dashboard', ['username' => $userId]);
    }

    function grafik1()
    {
        return view('dashboard/grafik1');
    }

    function grafik2()
    {
        return view('dashboard/grafik2');
    }

    function grafik3()
    {
        return view('dashboard/grafik3');
    }

    function grafik4()
    {
        return view('dashboard/grafik4');
    }

    function grafik5()
    {
        return view('dashboard/grafik5');
    }

    function grafik6()
    {
        return view('dashboard/grafik6');
    }

    
}
