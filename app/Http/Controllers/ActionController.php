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

class ActionController extends Controller
{

    function hashPassword(Request $request) {
        $hashedPassword = Hash::make($request['pass']);
        return response($hashedPassword);
    }

    function showdata(Request $request)
    {
        $id         = $request['id'];
        $whr        = $request['whr'];
        $table      = $request['table'];
        $data       = array(
            'id'    => $id,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($data);

        return response($arr);
    }

    function edit(Request $request)
    {
        $table      = $request['table'];
        $id         = $request['id'];
        $whr        = $request['whr'];
        $data       = $request['dats'];
        DB::table($table)->where($whr, $id)->update($data);
        return response('success');
    }

    function delete(Request $request)
    {
        $table      = $request['table'];
        $id         = $request['id'];
        $whr        = $request['whr'];
        DB::table($table)->where($whr, $id)->update(['is_active' => 0]);
        return response('success');
    }

    function editimage(Request $request)
    {
        if ($request->hasFile('edit_image')) {
            $folder     = $request->get('folder');
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('edit_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/img/'.$folder.'/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('edit_image')->move($path, $fileName);

            $id         = $request->get('id');
            $table      = $request->get('table');
            $field      = $request->get('field');
            $update_by  = auth::user()->id;
            $data       = array(
                'update_by' => $update_by,
                $field      => $fileName
            );
            $update     = actionupdate($table,$id,$data);

            return response($fileName);
        }   
    }

    function editvidio(Request $request)
    {
        if ($request->hasFile('edit_image')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('edit_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/vidio/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('edit_image')->move($path, $fileName);

            $id         = $request->get('id');
            $table      = $request->get('table');
            $field      = $request->get('field');
            $update_by  = auth::user()->id;
            $data       = array(
                'update_by' => $update_by,
                $field      => $fileName
            );
            $update     = actionupdate($table,$id,$data);

            return response($fileName);
        }   
    }

    

}

