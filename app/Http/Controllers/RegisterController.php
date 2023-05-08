<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\File;
use ZanySoft\Zip\Zip;
use ZipArchive;
use Carbon\Carbon;
use Response;
use Hash;
use Auth;
use Session;
use Redirect;

class RegisterController extends Controller
{
    function register()
    {
        $data = array(
            'title'         => 'Healty Bites'
        );

        return view('register')->with($data);
    }


    function saveregister(Request $request)
    {
        $username   = $request['username'];
        $password   = Hash::make($request['password']);
        $pass       = $request['password'];
        $role_id    = $request['role_id'];
        $name       = $request['name'];
        $email       = $request['email'];
        $foto       = $request['foto'];
        
        $is_active  = 1;
        $update_by  = 1;

        DB::insert("INSERT INTO users (username, password, pass, role_id, name, email, foto, is_active, update_by) values (?, ?, ?, ?, ?, ?, ?, ?, ?)", [$username, $password, $pass, $role_id, $name, $email, $foto, $is_active, $update_by]);

        return response('success');
    }

}
