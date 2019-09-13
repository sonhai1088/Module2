<?php


namespace App\Http\Repository;



use App\Note_type;

class Note_typeRepository
{
    public function getAll()
    {
        return Note_type::all();
    }
}
