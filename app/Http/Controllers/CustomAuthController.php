<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use MonoLog\Logger;
use Monolog\Handler\StreamHandler;

class CustomAuthController
{

    public function index()
    {
        LoggingController::info("Class: CustomAuthController, Method: index, Entry");
        LoggingController::info("Class: CustomAuthController, Method: index, Exit");
        return view ('auth.login');

    }

    public function customLogin(Request $request)
    {
        LoggingController::info("Class: CustomAuthController, Method: customLogin, Entry");
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request ->only('email', 'password');
        if(Auth::attempt($credentials))
        {
            LoggingController::info("Class: CustomAuthController, Method: customLogin, Exit");
            return redirect()->intended('home');
        }
        LoggingController::info("Class: CustomAuthController, Method: customLogin, Exit");
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        LoggingController::info("Class: CustomAuthController, Method: registration, Entry");
        LoggingController::info("Class: CustomAuthController, Method: registration, Exit");
        return view ('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        LoggingController::info("Class: CustomAuthController, Method: customRegistration, Entry");
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        LoggingController::info("Class: CustomAuthController, Method: customRegistration, Exit");
        return redirect("login")->withSuccess('Account created successfully!!');
    }

    public function create(array $data)
    {
        LoggingController::info("Class: CustomAuthController, Method: create, Entry");
        LoggingController::info("Class: CustomAuthController, Method: create, Exit");
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function signOut()
    {
        LoggingController::info("Class: CustomAuthController, Method: signOut, Entry");
        Session::flush();
        Auth::logout();
        LoggingController::info("Class: CustomAuthController, Method: signOut, Exit");
        return Redirect('login');
    }

}
