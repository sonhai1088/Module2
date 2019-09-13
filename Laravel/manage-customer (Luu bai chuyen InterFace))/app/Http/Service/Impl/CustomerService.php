<?php


namespace App\Http\Service\Impl;


use App\Customer;
use App\Http\Repository\Eloquent\CustomerRepositoryEloquent;
use App\Http\Service\CustomerServiceInterface;

class CustomerService implements CustomerServiceInterface
{
    protected $customerRepository;
    public function __construct(CustomerRepositoryEloquent $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }


    public function getAll()
    {
        return $this->customerRepository->getAll();
    }

    public function store($request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob = $request->input('dob');

        $this->customerRepository->save($customer);
    }
    public function findByID($id){
        return $this->customerRepository->findByID($id);
    }

    public function update($request, $id)
    {
        $customer = $this->customerRepository->findByID($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob = $request->input('dob');

//        $this->customerRepository->save($customer);
    }

    public function delete($id)
    {
        $customer = $this->customerRepository->findByID($id);
        $this->customerRepository->delete($customer);
    }
}
