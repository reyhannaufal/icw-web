<?php

namespace App\Http\Controllers;

use App\Exports\PartnerExport;
use App\Http\Requests\StorePartnerRequest;
use App\Models\Partner;
use Maatwebsite\Excel\Facades\Excel;

class PartnersController extends Controller
{

    public function index()
    {
        $this->authorize('interactAsAdmin');

        $partners = Partner::all();

        return view('dashboard.admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('pages.become-partner');
    }

    public function store(StorePartnerRequest $request)
    {
        $attributes = $request->validated();
        Partner::create(
            [
                'first_name' => $attributes['first_name'],
                'last_name' => $attributes['last_name'],
                'institution' => $attributes['institution'],
                'email' => $attributes['email'],
                'phone_number' => $attributes['phone_number'],
                'option' => $attributes['option'],
            ]
        );

        return back()->with('success', 'Pesan terkirim!');
    }

    public function export()
    {
        $this->authorize('interactAsAdmin'); // If false, it'll display 403
        return Excel::download(new PartnerExport(), 'Partner ICW' . '.xlsx');
    }

    public function destroy(Partner $partner)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        $partner->delete();

        return back()->with('succes', 'Delete berhasil!');
    }
}
