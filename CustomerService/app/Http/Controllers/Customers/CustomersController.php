<?php namespace App\Http\Controllers\customers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $customers = Customer::all()->toArray();

		return response()->json($customers);//view("customers_list")->with('customers', $customers);
	}

    public function getAllCustomers()
    {

    }

    public function store()
    {
        $input = Input::get();

        $customer = new Customer($input);
        $customer->save();

        return "customer added";
    }
    public function create()
    {
        return view("create_customer");
    }
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function getCustomerById($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    public function update($id)
    {
        $input = Input::get();

        $customer = Customer::find($id);
        $customer->fill($input);
        $customer->save();

        return "customer updated";
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete($id);

        return "customer deleted";
    }
}
