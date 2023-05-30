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

class DashboardController extends Controller
{
    function Dashboard()
    {
        $idn_user   = idn_user(auth::user()->id);
        $member     = DB::select("SELECT * FROM users WHERE role_id=2 AND is_active=1 LIMIT 10");
        $mfavorit   = DB::select("SELECT name, price, LENGTH(wishlist) AS jumlah FROM mst_product ORDER BY jumlah DESC LIMIT 3");
        $arr        = listpesanan(auth::user()->id);
        $challeng   = collect(\DB::select("SELECT * FROM mst_challeng WHERE is_active=2"))->first();
        $date       = date('Y-m-d');
        $cekch      = collect(\DB::select("SELECT COUNT(id_user) AS jml FROM trx_action_challeng WHERE id_user='$idn_user->id' AND last_update LIKE '%$date%'"))->first();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Dashboard',
            'member'    => $member,
            'mfavorit'  => $mfavorit,
            'arr'       => $arr,
            'challeng'  => $challeng,
            'ckch'      => $cekch
        );

        return view('Dashboard.list')->with($data);
    }

    function addactionchalne(Request $request)
    {
        $id_challeng    = $request['id_challeng'];
        $id_user        = $request['id_user'];


        DB::insert("INSERT INTO trx_action_challeng (id_challeng,id_user) values (?,?)", [$id_challeng,$id_user]);

        return response('success');
    }

}
