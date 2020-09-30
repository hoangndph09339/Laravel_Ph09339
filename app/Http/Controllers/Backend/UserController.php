<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories;

class UserController extends Controller
{
    public function index(){
        return "List User"."<br/>"."<a href='/'>Home</a>";
    }

    public function create(){
        return view('createUser');
    }

    public function store(Request $request){
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        $userdb = DB::table('users')->insert(
            [
                'name' => "$username",
                'email' => "$email",
                'password' => "$password",
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
        );
        if ($userdb){
            return redirect()->route('login');
        }
    }
}
