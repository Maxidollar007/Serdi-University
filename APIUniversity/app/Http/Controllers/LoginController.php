<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(AdminRequest $request){
        $credential=$request->validated();
        try{
            $access=Auth::attempt($credential);
            if($access){
                return response()->json([
                    "status"=>200,
                    "message"=>"Admin connecté",
                    "admin"=>$credential
                ]);
            }
        }catch(\Exception $e){
            return response()->json([
                "status"=>500,
                "message"=>"Echec",
                "error"=>$e->getMessage()
            ],500);
        }
        
    }
}
