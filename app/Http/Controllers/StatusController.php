<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $statut = Status::all();
        return view('Home.statut.statut', compact('statut'));
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Status::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('status.store')->with('success', 'Status created successfully!')->withInput();
    }

    public function show($id)
    {
        $status = Status::findOrFail($id);
        return view('status.show', compact('status'));
    }

    public function edit($id)
    {
        $status = Status::findOrFail($id);
        return view('status.edit', compact('status'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $status = Status::findOrFail($id);
        $status->update([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('status.index')->with('success', 'Status updated successfully!');
    }

    public function destroy($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();
        return redirect()->route('status.index')->with('success', 'Status deleted successfully!');
    }
}
