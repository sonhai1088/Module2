<?php


namespace App\Http\Service\Impl;


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
}
