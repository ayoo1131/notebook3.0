<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

class AuthController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function hello()
    {
        validator(request()->all(),[
            'email' => ['required', new Uppercase],
            'password' => ['required']
            
        ]) -> validate();
    }

}
