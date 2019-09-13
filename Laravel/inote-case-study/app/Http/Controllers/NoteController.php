<?php

namespace App\Http\Controllers;

use App\Http\Service\NoteService;
use App\Note;
use App\Note_type;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    protected $noteService;
    public function __construct(NoteService $noteService)
    {
        $this->noteService = $noteService;
    }

    public function index()
    {
        $notes = $this->noteService->getAll();
        return view('notes.list', compact('notes'));
    }
    public function create()
    {
        $notes_type = Note_type::all();
        return view('notes.create', compact('notes_type'));
    }
    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->type = $request->input('note_type');
        $note->save();
        return redirect()->route('notes.index');
    }
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        $notes_type = Note_type::all();
        return view('notes.edit', compact('note', 'notes_type'));
    }

    public function update(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->type = $request->input('note_type');
        $note->save();

        return redirect()->route('notes.index');
    }
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('notes.index');
    }
}
