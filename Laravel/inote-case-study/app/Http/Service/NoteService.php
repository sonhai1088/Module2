<?php


namespace App\Http\Service;


use App\Http\Repository\NoteRepository;

class NoteService
{
    protected $noteRepository;
    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function getAll()
    {
        return $this->noteRepository->getAll();
    }


}
