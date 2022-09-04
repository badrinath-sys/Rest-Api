<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use  Illuminate\Support\Facades\File;

class ConnectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
     public function create(Request $request)
     {
        $connection = $request->all();

       $test['token'] = time();
       $test['connection'] = json_encode($connection);
   
       $fileName = $test['token']. '_datafile.json';

       
       File::put(base_path('/storage/app/'.$fileName),$test);
     
       $crid = mt_rand(10000000, 99999999);

       return response()->json(["message"=> "Connection request processed.",
                               "crid"=>"$crid"] );
     }

    }
