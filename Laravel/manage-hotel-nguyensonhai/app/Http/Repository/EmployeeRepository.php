<?php


namespace App\Http\Repository;


use App\Employee;


class EmployeeRepository
{
    public function getAll()
    {
        return Employee::all();
    }
}
