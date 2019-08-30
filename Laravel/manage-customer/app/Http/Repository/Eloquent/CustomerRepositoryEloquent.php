<?php


namespace App\Http\Repository\Eloquent;


use App\Customer;
use App\Http\Repository\contracts\RepositoryInterface;

class CustomerRepositoryEloquent implements RepositoryInterface
{

    public function getAll()
    {
        return Customer::all();
    }
}
