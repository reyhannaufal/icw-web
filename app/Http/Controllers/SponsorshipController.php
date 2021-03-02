<?php

namespace App\Http\Controllers;

use App\Exports\SponsorExport;
use App\Http\Requests\StoreSponsorRequest;
use App\Models\Sponsorship;
use Maatwebsite\Excel\Facades\Excel;

class SponsorshipController extends Controller
{

    public function index()
    {
        $this->authorize('interactAsAdmin');

        $sponsors = Sponsorship::all();

        return view('dashboard.admin.sponsorship.index', compact('sponsors'));
    }

    public function create()
    {
        return view('pages.become-partner');
    }

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

    public function export()
    {
        $this->authorize('interactAsAdmin'); // If false, it'll display 403
        return Excel::download(new SponsorExport(), 'Partner ICW' . '.xlsx');
    }

    public function destroy(Sponsorship $sponsor)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        $sponsor->delete();

        return back()->with('succes', 'Delete berhasil!');
    }
}
