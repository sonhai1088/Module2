<?php

namespace App\Http\Controllers;

use App\Http\Service\Note_typeService;
use App\Note_type;
use Illuminate\Http\Request;


class Note_typeController extends Controller
{
    protected $note_typeService;
    public function __construct(Note_typeService $note_typeService)
    {
        $this->note_typeService = $note_typeService;
    }

    public function index()
    {
        $notes_type = $this->note_typeService->getAll();
//        dd($notes_type);
        return view('notes_type.list', compact('notes_type'));
    }

    public function create()
    {
        return view('notes_type.create');
    }

    public function store(Request $request)
    {
        $note_type = new Note_type();
        $note_type->name = $request->input('name');
        $note_type->description = $request->input('description');
        $note_type->save();
        return redirect()->route('notes_type.index');
    }

    public function edit($id)
    {
        $note_type = Note_type::findOrFail($id);
        return view('notes_type.edit', compact('note_type'));
    }

    public function update(Request $request, $id)
    {
        $note_type = Note_type::findOrFail($id);
        $note_type->name = $request->input('name');
        $note_type->description = $request->input('description');
        $note_type->save();

        return redirect()->route('notes_type.index');
    }

    public function destroy($id)
    {
        $note_type = Note_type::findOrFail($id);
        $note_type->delete();
        return redirect()->route('notes.index');

    }
}
