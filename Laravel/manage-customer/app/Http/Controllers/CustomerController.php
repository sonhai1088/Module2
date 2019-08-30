<?php

namespace App\Http\Controllers;



use App\Customer;
use App\Http\Service\Impl\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use http\Env\Response;

class CustomerController extends Controller
{
    Protected $CustomerService;
    public function __construct(CustomerService $CustomerService)
    {
        $this->CustomerService=$CustomerService;
    }

    public function index(){
		$customers = $this->CustomerService->getAll();
		return view('customers.list', compact('customers'));
	}
	public function create(){
		return view('customers.create');
	}
	public function store(Request $request){
		$customer = new Customer();
		$customer->name = $request->input('name');
		$customer->email = $request->input('email');
		$customer->dob = $request->input('dob');
		$customer->save();

		Session::flash('success', 'Tạo mới khách hàng thành công');
		return redirect()->route('customers.index');
	}
	public function edit($id){
		$customer = Customer::findOrFail($id);
		return view('customers.edit', compact('customer'));
	}
	public function update(Request $request, $id){
		$customer = Customer::findOrFail($id);
		$customer->name = $request->input('name');
		$customer->email = $request->input('email');
		$customer->dob = $request->input('dob');
		$customer->save();
		Session::flash('success', 'Cập nhật khách hàng thành công');
		return redirect()->route('customers.index');
	}
	public function destroy($id){
		$customer = Customer::findOrFail($id);
		$customer->delete();
		Session::flash('success', 'Xóa khách hàng thành công');
		return redirect()->route('customers.index');
	}
}
