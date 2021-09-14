<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{

    public function dashboard()
    {
        $notes = Note::latest()->get();
        return view('dashboard', compact('notes'));
    }
    public function index()
    {
        $notes = Note::latest()->get();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'note' => 'required'
        ]);

        Note::create([
            'title' => $request->title,
            'note' => $request->note
        ]);

        return redirect()->route('notes.index')
            ->with('success', 'note Created Successfully.');
    }

    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|min:5',
            'note' => 'required'
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')
            ->with('success', 'Note Updated Successfully.');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')
            ->with('success', 'Note Deleted Successfully.');
    }
}
