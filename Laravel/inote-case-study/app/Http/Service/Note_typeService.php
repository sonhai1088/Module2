<?php


namespace App\Http\Service;


use App\Http\Repository\Note_typeRepository;

class Note_typeService
{
    protected $note_typeRepository;
    public function __construct(Note_typeRepository $note_typeRepository)
    {
        $this->note_typeRepository = $note_typeRepository;
    }

    public function getAll()
    {
        return $this->note_typeRepository->getAll();

    }
}
