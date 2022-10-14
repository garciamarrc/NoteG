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

        return redirect('dashboard');
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        return redirect('dashboard');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect('dashboard');
    }
}
