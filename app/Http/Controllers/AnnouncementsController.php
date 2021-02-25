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
        $announcements = Announcement::all();
        return view('dashboard.admin.announcement.index', compact('announcements'));
    }

    public function create()
    {
        return view('dashboard.admin.announcement.create');
    }

    public function store(StoreAnnouncementRequest $request)
    {
        Announcement::create($request->validated());

        return redirect()->route('announcement.index');
    }

    public function edit(Announcement $announcement)
    {
        return view('dashboard.admin.announcement.edit', compact('announcement'));
    }

    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $announcement->update($request->validated());

        return redirect()->route('announcement.index');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('announcement.index');
    }
}
