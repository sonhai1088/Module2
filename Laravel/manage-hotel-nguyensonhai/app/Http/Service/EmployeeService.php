<?php


namespace App\Http\Service;


use App\Http\Repository\EmployeeRepository;

class EmployeeService
{
    protected $employeeRepository;
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->getAll();
    }


}
