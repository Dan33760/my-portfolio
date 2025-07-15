<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('portfolio.home');
    }

    public function services()
    {
        return view('portfolio.services');
    }
}
