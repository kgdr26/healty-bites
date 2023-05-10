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

class LandingPage extends Controller
{
    function Landing()
    {
        $category   = listcategory();
        $product    = listproduct();
        $layanan    = listlayanan();
        $contentlayanan    = listcontentlayanan();
        $member     = DB::select("SELECT * FROM users WHERE role_id=2 AND is_active=1 LIMIT 4");
        $data = array(
            'title'         => 'Healty Bites',
            'page'          => 'landingpage.home',       
            'category'      => $category,
            'product'       => $product,
            'layanan'       => $layanan,
            'contentlayanan' => $contentlayanan,
            'member'        => $member
        );

        return view('landingpage.list')->with($data);
    }

    function realtimetexthome(){
        $arr     = DB::select("SELECT * FROM mst_sett_home");

        return response($arr);
    }

}
