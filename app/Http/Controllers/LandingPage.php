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
        $vid        = collect(\DB::select("SELECT * FROM mst_vidios WHERE is_active=2"))->first();
        $data = array(
            'title'         => 'Healty Bites',
            'page'          => 'landingpage.home',       
            'category'      => $category,
            'product'       => $product,
            'layanan'       => $layanan,
            'contentlayanan' => $contentlayanan,
            'member'        => $member,
            'vid'         => $vid
        );

        return view('landingpage.list')->with($data);
    }

    function realtimetexthome(){
        $arr     = DB::select("SELECT * FROM mst_sett_home");

        return response($arr);
    }

    function artikel()
    {
        $category   = listcategory();
        $product    = listproduct();
        $layanan    = listlayanan();
        $contentlayanan    = listcontentlayanan();
        $member     = DB::select("SELECT * FROM users WHERE role_id=2 AND is_active=1 LIMIT 4");
        $arr        = collect(\DB::select("SELECT * FROM mst_artikel WHERE id='1'"))->first();
        $data = array(
            'title'         => 'Healty Bites',
            'page'          => 'landingpage.artikel',       
            'category'      => $category,
            'product'       => $product,
            'layanan'       => $layanan,
            'contentlayanan' => $contentlayanan,
            'member'        => $member,
            'arr'           => $arr
        );

        return view('landingpage.list')->with($data);
    }

    function settips()
    {
        $category   = listcategory();
        $product    = listproduct();
        $layanan    = listlayanan();
        $contentlayanan    = listcontentlayanan();
        $member     = DB::select("SELECT * FROM users WHERE role_id=2 AND is_active=1 LIMIT 4");
        $arr        = collect(\DB::select("SELECT * FROM mst_artikel WHERE id='2'"))->first();
        $data = array(
            'title'         => 'Healty Bites',
            'page'          => 'landingpage.settips',       
            'category'      => $category,
            'product'       => $product,
            'layanan'       => $layanan,
            'contentlayanan' => $contentlayanan,
            'member'        => $member,
            'arr'           => $arr
        );

        return view('landingpage.list')->with($data);
    }

    function vidios()
    {
        $category   = listcategory();
        $product    = listproduct();
        $layanan    = listlayanan();
        $contentlayanan    = listcontentlayanan();
        $member     = DB::select("SELECT * FROM users WHERE role_id=2 AND is_active=1 LIMIT 4");
        $arr        =  DB::select("SELECT * FROM mst_vidios WHERE is_active IN (1,2)");
        $data = array(
            'title'         => 'Healty Bites',
            'page'          => 'landingpage.vidios',       
            'category'      => $category,
            'product'       => $product,
            'layanan'       => $layanan,
            'contentlayanan' => $contentlayanan,
            'member'        => $member,
            'arr'           => $arr
        );

        return view('landingpage.list')->with($data);
    }

    

}
