<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Log;
use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class PaperController extends Controller
{
    public function index()
    {
        $this->authorize('interactAsAdmin');

        return view('dashboard.admin.paper.index', [
            'participants' => Event::where('name', 'Paper Competition')
                ->first()
                ->usersWithPaper()
                ->get()
        ]);
    }

    public function update(Request $request)
    {
        // Pastika nilai ada di antara 0-100
        if ($request->grade > 100.00 || $request->grade < 0) {
            abort(400);
        }

        // Update paper grade
        Event::where('id', 1)
            ->first()
            ->usersWithPaper()
            ->updateExistingPivot(
                $request->user_id,
                ['paper_grade' => $request->grade]
            );
        return 1;
    }
}
