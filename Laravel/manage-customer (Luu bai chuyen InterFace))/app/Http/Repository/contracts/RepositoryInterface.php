<?php


namespace App\Http\Repository\contracts;


interface RepositoryInterface
{
    public function getAll();
    public function save($customer);
    public function findByID($id);
    public function delete($customer);
}
