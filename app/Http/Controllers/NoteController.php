<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->paginate(6);

        return view('dashboard', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        Note::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('dashboard')->with('message', 'Nota creada')->with('color', 'green');
    }

    public function show(Note $note)
    {
        $this->authorize('show', $note);

        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {
        $this->authorize('edit', $note);

        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $this->authorize('update', $note);

        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect('dashboard')->with('message', 'Nota actualizada')->with('color', 'green');
    }

    public function destroy(Note $note)
    {
        $this->authorize('delete', $note);

        $note->delete();

        return redirect('dashboard')->with('message', 'Nota eliminada')->with('color', 'red');
    }
}
