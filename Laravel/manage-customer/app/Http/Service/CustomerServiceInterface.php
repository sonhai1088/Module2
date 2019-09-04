<?php


namespace App\Http\Service;


interface CustomerServiceInterface
{
    public function getAll();
    public function store($request);
    public function update($request, $id);
    public function delete($id);
}
