<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CustomerImportService;
use App\Entities\Customers;

class CustomerImportController extends Controller
{
    public function __construct(protected CustomerImportService $customer)
    {
        $this->customer = $customer;
    }
 
    public function __invoke(Request $request)
    {
        try {
            $data = $request->all();
            $url = $data['url']."=".$data['number'];
            $json = json_decode(file_get_contents($url), true);

            foreach ($json as $reskey => $res) {
                if($reskey == 'results'){
                    $result = array_map(function($value) {
                        $parameter = array();
                        if(isset($value['name']['first']))
                            $parameter['firstname'] = $value['name']['first'];
                        if(isset($value['name']['last']))
                            $parameter["lastname"] = $value['name']['last'];
                        if(isset($value['email']))
                            $parameter["email"] = $value['email'];
                        if(isset($value['login']['username']))
                            $parameter["username"] = $value['login']['username'];
                        if(isset($value['login']['password']))
                            $parameter["password"] = $value['login']['username'];
                        if(isset($value['gender']))
                            $parameter["gender"] = $value['gender'];
                        if(isset($value['location']['country']))
                            $parameter["country"] = $value['location']['country'];
                        if(isset($value['location']['city']))
                            $parameter["city"] = $value['location']['city'];
                        if(isset($value['phone']))
                            $parameter["phone"] = $value['phone'];

                        $parameter["created_at"] = date("Y-m-d H:i:s");
                        $parameter["updated_at"] = date("Y-m-d H:i:s");

                        $customer = $this->customer->query($parameter);
                    }, $res);
                }
                
                $data = [
                    'success' => true,
                    'message'=> 'Your import processed correctly'
                ] ;
                
            }
        } catch (Exception $e) {
            $data = [
                'success' => false,
                'message'=> 'Your import failed'
            ] ;
        }

        return response()->json($data);
        
    }
}
