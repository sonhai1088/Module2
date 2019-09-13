<?php


namespace App\Http\Repository;


use App\Note;

class NoteRepository
{
    public function getAll()
    {
        return Note::all();
    }
}
