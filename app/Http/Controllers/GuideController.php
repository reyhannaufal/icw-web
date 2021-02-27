<?php

namespace App\Http\Controllers;

class GuideController extends Controller
{
    public function index()
    {
        $this->authorize('interactAsAdmin'); // If false, it'll display 403
        return view('dashboard.admin.guide.index');
    }
}
