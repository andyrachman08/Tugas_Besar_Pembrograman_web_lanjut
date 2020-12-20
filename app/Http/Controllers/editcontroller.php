<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editcontroller extends Controller
{
    public function edit()
    {
        return view('edit'); 
    }

    public function update(Request $request){

        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            // 'password' => $request->get('password'),
            'alamat' => $request->get('alamat'),
            'telepon' => $request->get('telepon')
        ]);
        return view('edit')->with(['success' => 'Pesan Berhasil']); 
    }
}
