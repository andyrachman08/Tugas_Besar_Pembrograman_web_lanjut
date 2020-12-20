<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Users;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
        return view ('profile');
    }
}
