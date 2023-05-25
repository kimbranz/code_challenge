<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CustomerRetrieveService;
use App\Entities\Customers;

class CustomerRetrieveController extends Controller
{
    public function __construct(protected CustomerRetrieveService $customers)
    {
        $this->customers = $customers;
    }
 
    public function __invoke()
    {
        $parameter = array();
        $parameter['by'] = "all";
        $customers = $this->customers->query($parameter);

        return view('customerlist',  compact('customers'));

    }

    public function getOneCustomer($id)
    {
        $parameter = array();
        $parameter['by'] = "id";
        $parameter['value'] = $id;
        $customers = $this->customers->query($parameter);

        return view('customerdetails',  compact('customers'));

    }
}
