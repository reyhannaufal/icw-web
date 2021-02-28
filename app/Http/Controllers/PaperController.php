<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

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
        // Pastikan nilai ada di antara 0-100
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
        return back();
    }

    public function destroy(User $user)
    {
        $this->authorize('interactAsAdmin', auth()->user());
        if ($user->getGrade() == 0.00) {
            $user->deletePaper();
            return back()->with('success', 'Paper telah dihapus!');
        } else {
            return back()->with('error', 'Paper belum dapat dihapus!');
        }
    }
}
