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

class MasterDataController extends Controller
{
    function category()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listcategory();
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Category',
            'arr'   => $arr,
        );

        return view('MasterData.category')->with($data);
    }

    function addcategory(Request $request)
    {
        $name       = $request['name'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_category (name,is_active,update_by) values (?,?,?)", [$name,$is_active,$update_by]);

        return response('success');
    }

    function showDataCategory(Request $request)
    {
        $id         = $request['id'];
        $whr        = 'id';
        $table      = 'mst_category';
        $data       = array(
            'id'    => $id,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($data);

        return response($arr);
    }

    function product()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listproduct();
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Product',
            'arr'   => $arr,
        );

        return view('MasterData.product')->with($data);
    }

    function addproduct(Request $request)
    {
        $name       = $request['name'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_product (name,is_active,update_by) values (?,?,?)", [$name,$is_active,$update_by]);

        return response('success');
    }

    function showDataproduct(Request $request)
    {
        $id         = $request['id'];
        $whr        = 'id';
        $table      = 'mst_product';
        $data       = array(
            'id'    => $id,
            'table' => $table,
            'whr'   => $whr
        );
        $arr        = cekdata($data);

        return response($arr);
    }

}
