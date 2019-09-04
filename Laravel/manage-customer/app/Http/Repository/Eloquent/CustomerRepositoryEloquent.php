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

    public function store($customer)
    {
        $customer->save();
    }

    public function findByID($id)
    {
        return Customer::FindOrFail($id);
    }

    public function update($customer)
    {
        $customer->save();
    }

    public function delete($customer)
    {
        $customer->delete();
    }
}
