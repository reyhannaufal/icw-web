<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

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
        $curr_event = Event::where('id', 1)->first();

        try {
            $this->authorize('interactAsEventAdmin', $curr_event); // If false, it'll display 403
        } catch (Throwable  $e) {
            return back()->with('error', 'Forbidden access!');
        }

        // Pastikan nilai ada di antara 0-100
        if ($request->grade > 100.00 || $request->grade < 0) {
            abort(400);
        }

        // Update paper grade
        $curr_event
            ->usersWithPaper()
            ->updateExistingPivot(
                $request->user_id,
                ['paper_grade' => $request->grade]
            );
        return back();
    }

    public function download($path)
    {
        $this->authorize('interactAsAdmin', auth()->user());
        return Storage::download($path);
    }

    public function destroy(User $user)
    {
        $this->authorize('interactAsAdmin', auth()->user());
        if ($user->getGrade() == 0.00) {
            $user->deletePaper();
            return back();
        } else {
            return back()->with('error', 'Paper belum dapat dihapus!');
        }
    }
}
