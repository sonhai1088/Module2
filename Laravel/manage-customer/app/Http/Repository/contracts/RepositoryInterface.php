<?php


namespace App\Http\Repository\contracts;


interface RepositoryInterface
{
    public function getAll();
    public function store($customer);
    public function findByID($id);
    public function update($customer);
    public function delete($customer);
}
