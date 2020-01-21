<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected function index()
    {
        $customers =Customer::where('active','1')->get();

        return view('customer.index', compact('customers'));
    }
    protected function create()
    {
        $customer=new Customer();
        return view('customer.create',compact('customer'));
    }

    protected function store()
    {

        $customer = Customer::create($this->validatedData());
        return redirect('/customers/' . $customer->id);
    }
    protected function show(Customer $customer)
    {

        // $customer=Customer::find($customer);
        // dd($customer);
        return view('customer.show', compact('customer'));
    }

    protected function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {

        $customer->update($this->validatedData());

        return redirect('/customers');
    }

   public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('/customers');
    }

    protected function validatedData()
    {
       return request()->validate([
            'name' => 'required | min:5 | max:25',
            'email' => 'required | email',
        ]);
    }
}
