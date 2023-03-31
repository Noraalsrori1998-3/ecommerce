<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function registers(Request $request)
    {
        if(($request->has('form1')))
        {
             $input = [
                'name'=>$request->name,
                'password' => $request->password1,
                'email' => $request->email1,
            ];
              $rules = [
                'name'=>'required',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ];
            // $validated = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|string|email|max:255|unique:users',
            //     'password' => 'required|string|min:6',

            // ]);
            $validator = Validator::make($input, $rules);
            if ($validator->fails()) {
                return redirect()->route('register')->with('error',$validator->errors());
            }
            
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email1'],
                'password' => Hash::make($request['password1']),
            ]);

            $token=$user->createToken('my-app-token')->plainTextToken;
                    return redirect()->route('index');
        }
        if(($request->has('form2')))
        {
                    $input = $request->all();
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required|min:6',
            ]);

                if($validator->passes())
                {
                    $credentials = $request->only('email', 'password');
                        $authSuccess = \Illuminate\Support\Facades\Auth::attempt($credentials);
                    if($authSuccess) 
                    {
                        $token=auth()->user()->createToken('my-app-token')->plainTextToken;
                        return redirect()->route('index');  
                    }
                    else
                    {
                    return
                    response([
                        'success' => false,
                        'message' => 'Login failed. Account is not active'
                        ], Response::HTTP_FORBIDDEN);
                    }
                }
                return response(['success'=>false,'errors' => $validator->errors()]);
          
        }
    }
    
}
