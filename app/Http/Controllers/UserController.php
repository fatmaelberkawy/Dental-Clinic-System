<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    
    public function handleLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        // search for user in database
        $result = DB::select(
            "select * from users where email=? and password=?",
            [$email, $password],
        );
        
        // check user not found
        if(empty($result)){
            return back()->with('error', 'Wrong email or password')->withInput();

        }
    
        // return and display user's data
        $user = $result[0];
        // store user's data in session
        session()->regenerate();
        session(['user'=>$user]);

        // redirect to profile
        return to_route('home');
    }

    public function logout(){
        // delete session data and go to login page
        session()->invalidate();
        return to_route('showLogin');
    }
    public function home(){
        return view('home');
    }

    public function showRegister(){
        return view('register');
    }

   
    public function handleRegister(Request $request){
    
        // validate request
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:4',
        ]);
    
       // get form data
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;

    // insert user to database
    DB::insert("
        insert into users (name, email, password) 
        values(?, ?, ?)
    ", [$name, $email, $password]);

    // retrieve inserted user
    $id = DB::getPdo()->lastInsertId();
    $user = DB::select("select * from users where id = ?", [$id])[0];

    // store user's data in session
    session()->regenerate();
    session(['user'=>$user]);

    // go to home page
    return to_route('home');

    }
    


    public function profile(){
        return view('profile');
    }
    
    
}
