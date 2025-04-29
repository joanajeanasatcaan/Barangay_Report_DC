<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use Inertia\Inertia;

class IncidentController extends Controller
{
    public function index()
{
    $incidents = auth()->user()->incidents()->latest()->get();
    return Inertia::render('Incidents/Index', compact('incidents'));
}

public function create()
{
    return Inertia::render('Incidents/Create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    auth()->user()->incidents()->create($request->only('title', 'description'));

    return redirect()->route('incidents.index');
}

public function adminIndex()
{
    $incidents = Incident::with('user')->latest()->get();
    return Inertia::render('Admin/Reports', compact('incidents'));
}

public function markResolved(Request $request, Incident $incident)
{
    $request->validate([
        'status' => 'required|in:On Progress,Solved',
    ]);

    $incident->update([
        'status' => $request->status,
    ]);

    return back()->with('message', 'Incident status updated.');
}


}
