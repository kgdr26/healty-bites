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

class SettLandingController extends Controller
{
    function settlandinghome()
    {
        $idn_user   = idn_user(auth::user()->id);
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Setting Landing Page'
        );

        return view('Setlandingpage.home')->with($data);
    }

    function setartikel()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = collect(\DB::select("SELECT * FROM mst_artikel WHERE id='1'"))->first();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Setting Landing Page',
            'arr'       => $arr
        );

        return view('Setlandingpage.setartikel')->with($data);
    }

    function addartikel(Request $request)
    {
        $input = $request->all();
        $content = $input['editor'];
        // Simpan ke database
        DB::table('mst_artikel')->where('id', 1)->update(['content' => $content]);
        // Kirim respons ke client
        return response()->json(['success' => true]);
    }

    function setips()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = collect(\DB::select("SELECT * FROM mst_artikel WHERE id='2'"))->first();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Setting Landing Page',
            'arr'       => $arr
        );

        return view('Setlandingpage.setips')->with($data);
    }

    function setvidio()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        =  DB::select("SELECT * FROM mst_vidios WHERE is_active IN (1,2)");
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Setting Landing Page',
            'arr'       => $arr
        );

        return view('Setlandingpage.setvidio')->with($data);
    }

    function upload_vidio(Request $request)
    {
        if ($request->hasFile('add_image')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/vidio/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_image')->move($path, $fileName);

            return response($fileName);
        }
    }

    function addvidio(Request $request)
    {
        $name       = $request['name'];
        $descripsi  = $request['descripsi'];
        $vidio      = $request['vidio'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_vidios (name,descripsi,vidio,is_active,update_by) values (?,?,?,?,?)", [$name,$descripsi,$vidio,$is_active,$update_by]);

        return response('success');

    }

    
}
