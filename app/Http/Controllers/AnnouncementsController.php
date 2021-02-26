<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index()
    {
        $this->authorize('seeAnnouncements'); // If false, it'll display 403
        $announcements = Announcement::all();
        return view('dashboard.admin.announcement.index', compact('announcements'));
    }

    public function create()
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        return view('dashboard.admin.announcement.create');
    }

    public function store(StoreAnnouncementRequest $request)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        Announcement::create($request->validated());

        return redirect()->route('announcement.index');
    }

    public function edit(Announcement $announcement)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        return view('dashboard.admin.announcement.edit', compact('announcement'));
    }

    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        $announcement->update($request->validated());

        return redirect()->route('announcement.index');
    }

    public function destroy(Announcement $announcement)
    {
        $this->authorize('interactAsMaster'); // If false, it'll display 403
        $announcement->delete();

        return redirect()->route('announcement.index');
    }
}
