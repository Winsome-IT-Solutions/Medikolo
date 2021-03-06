<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Admin;
class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';
   
    public function __construct()
    {
        //$this->middleware->('guest:admin');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        //validate form data
        $this->validateLogin($request, [
            
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);
        
        //attempt to login a user
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
        {
            //if successfull login redirect to
            return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessfull login redirect to
        return redirect()->back()->withInput($request->only('email','remember')); 
       // return true;
    }

}
