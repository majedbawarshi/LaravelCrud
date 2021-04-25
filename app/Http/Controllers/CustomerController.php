<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
//        $activeCustomers = Customer::active()->get();
//        $inActiveCustomers = Customer::inactive()->get();

//        $customers = Customer::all();

//        return view('internals.customers',[
//            'activeCustomers' => $activeCustomers,
//            'inActiveCustomers' => $inActiveCustomers,
//        ]);
        // replaced the previous array with compact. It will do the same without redundancy in our code.

        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();

        return view('customers.create', compact('companies', 'customer'));
    }

    public function store(Request $req)
    {
        // mass assignment
        // will through an error if no fillable or guarded property is mentioned in the model.
        Customer::create($this->validateRequest());

        /*$customer = new Customer();
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->active = $req->active;
        $customer->save();*/
        return redirect('customers');
    }

    public function show(Customer $customer)
    {
        //currently using route model binding
//        $customer = Customer::find($customer);
//        $customer = Customer::where('id', $customer)->firstOrFail();

        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validateRequest());

        return redirect('customers/'.$customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]);
    }
}
