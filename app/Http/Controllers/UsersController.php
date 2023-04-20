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

class UsersController extends Controller
{
    function Users()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr    = listusers();
        $role   = listrole();
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Users',
            'arr'   => $arr,
            'role'  => $role
        );

        return view('Users.listuser')->with($data);
    }

    function adduser(Request $request)
    {

        $username   = $request['username'];
        $password   = Hash::make($request['password']);
        $pass       = $request['password'];
        $role_id    = $request['role_id'];
        $name       = $request['name'];
        $email       = $request['email'];
        $foto       = $request['foto'];
        
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO users (username, password, pass, role_id, name, email, foto, is_active, update_by) values (?, ?, ?, ?, ?, ?, ?, ?, ?)", [$username, $password, $pass, $role_id, $name, $email, $foto, $is_active, $update_by]);

        return response('success');
    }

    function upload_img(Request $request)
    {

        if ($request->hasFile('add_image')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/img/profile/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_image')->move($path, $fileName);

            return response($fileName);
        }

    }

    function Role()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr    = listrole();
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Manage Role',
            'arr'   => $arr
        );

        return view('Users.roleuser')->with($data);
    }
    
    function addRole(Request $request)
    {
        $name       = $request['name'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_role (name,is_active,update_by) values (?,?,?)", [$name,$is_active,$update_by]);

        return response('success');
    }

    function showDataRole(Request $request)
    {
        $id         = $request['id'];
        $whr        = 'id';
        $table      = 'mst_role';
        $data       = array(
            'id'    => $id,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($data);

        return response($arr);
    }


}
