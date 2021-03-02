<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSponsorRequest;
use App\Models\Sponsorship;

class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('interactAsAdmin');

        $sponsors = Sponsorship::all();

        return view('dashboard.admin.sponsorship.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.become-partner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSponsorRequest $request)
    {
        $attributes = $request->validated();


        Sponsorship::create(
            [
                'first_name' => $attributes['first_name'],
                'last_name' => $attributes['last_name'],
                'institution' => $attributes['institution'],
                'email' => $attributes['email'],
                'phone_number' => $attributes['phone_number'],
                'option' => $attributes['option'],
            ]
        );

        return redirect()->route('sponsorship')
            ->with('success', 'Pesan terkirim!');
    }
}
