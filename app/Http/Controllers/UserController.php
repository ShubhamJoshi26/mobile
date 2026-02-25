<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Json;

class UserController extends Controller
{
     public function login(){
        // dd("sdsd");
        return view('login');
    }

    public function loginUser(Request $request){
        // try{
            if(!empty($request->all())){
                $data = $request->all();
            }else{
               parse_str($request->getContent(), $data);
                
            }
         $response = Http::withHeaders([
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                    ])
                    ->withOptions([
                        'verify' => false,
                        'timeout' => 30,
                    ])
                    ->post('https://crm.magnitotechnologies.com/api/student/login', [
                        'username' => $request->username,
                        'password' => $request->password,
                    ]);

            $result = $response->json();
            if ($response->successful() && $result['status'] == true) {

                    // ✅ Token Save (Session Example)
                    // session([
                    //     'student_token' => $result['token'],
                    //     'student_data'  => $result['student']
                    // ]);

                    return response()->json([
                        'status'  => 'success',
                        'url' => route('dashboard'),
                        'token' => $result['token'],
                        'message'=>$result['message']
                    ]);

                } else {

                    return response()->json([
                        'status'  => 'error',
                        'message' => $result['message'] ?? 'Login Failed'
                    ]);
                }
            // $url = route('dashboard');
            // return response()->json(['status'=>'success','message'=>$url]);
        // }catch(Exception $e){
        //     return response()->json(['status'=>400,'message'=>$e->getMessage()]);
        // }
    }
}
