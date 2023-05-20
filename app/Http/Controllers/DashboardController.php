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
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Dashboard',
            'member'    => $member,
            'mfavorit'  => $mfavorit
        );

        return view('Dashboard.list')->with($data);
    }

}
