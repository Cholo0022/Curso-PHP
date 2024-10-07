<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        //$users = User::where('age' , '>', 14)->get(); devuelve los mayores de 14 años
        return view('user.index', compact('users'));
    }

    public function create(){
        $user = new User();
        $user->name = 'Andres';
        $user->email = 'andres@gmail.com';
        $user->password = Hash::make('123456');
        $user->age = 44;
        $user->address = 'Crespo 857';
        $user->zip_code = 2854;
        $user->save();

        User::create([
            "name" => 'Alonzo',
            "email" => 'alonzo@gmail.com',
            "password" => Hash::make('1234'),
            "age" => 5,
            "address" => 'Pte Peron 173',
            "zip_code" => 2826
        ]);

        User::create([
            "name" => 'Luna',
            "email" => 'luna@gmail.com',
            "password" => Hash::make('1234'),
            "age" => 15,
            "address" => 'Alte Brown 209',
            "zip_code" => 2828
        ]);

        return \redirect()->route('user.index');
    }
}
