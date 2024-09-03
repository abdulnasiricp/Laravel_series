<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function create()
    {
        return view('admin-panel.register');
        
    }

    public function register(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =Hash::make($req->password);
        $user->save();
        return redirect()->route('login');
    }

}
