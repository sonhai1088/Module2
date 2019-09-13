<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Service\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;
    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();
        return view('employees.list', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
//        $employee->manhanvien = $request->input('manhanvien');
        $employee->nhomnhanvien = $request->input('nhomnhanvien');
        $employee->hoten = $request->input('hoten');
        $employee->gioitinh = $request->input('gioitinh');
        $employee->sodienthoai = $request->input('sodienthoai');
        $employee->socmnd = $request->input('socmnd');
        $employee->ngaysinh = $request->input('ngaysinh');
        $employee->email = $request->input('email');
        $employee->diachi = $request->input('diachi');
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->nhomnhanvien = $request->input('nhomnhanvien');
        $employee->hoten = $request->input('hoten');
        $employee->gioitinh = $request->input('gioitinh');
        $employee->sodienthoai = $request->input('sodienthoai');
        $employee->socmnd = $request->input('socmnd');
        $employee->ngaysinh = $request->input('ngaysinh');
        $employee->email = $request->input('email');
        $employee->diachi = $request->input('diachi');
        $employee->save();

        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('employees.index');
        }
        $employees = Employee::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('employees.list', compact('employees'));
    }
}
