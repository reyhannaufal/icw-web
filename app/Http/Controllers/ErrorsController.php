<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    public function show($error_code) {
        return abort($error_code);
    }
}
