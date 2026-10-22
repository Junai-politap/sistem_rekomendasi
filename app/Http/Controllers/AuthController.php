<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    

    function test(){
		$user= new Admin();
		$user->nama= 'Super Admin';
		$user->username= 'admin';
		$user->password='admin';
		$user->save();

		return "Berhasil";


	}
}
