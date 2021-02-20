<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about.about');
    }
}
