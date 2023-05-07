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
        $arr        = listcategory();
        $product    = listproduct();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Product',
            'arr'       => $arr,
            'product'   => $product
        );

        return view('MasterData.product')->with($data);
    }

    function upload_img_prod(Request $request)
    {

        if ($request->hasFile('add_image')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/img/product/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_image')->move($path, $fileName);

            return response($fileName);
        }

    }

    function addproduct(Request $request)
    {

        $id_category    = $request['id_category'];
        $name           = $request['name'];
        $price_inpu     = $request['price'];
        $price          = (int) str_replace(array('Rp', '.', ','), '', $price_inpu);
        $description    = $request['description'];
        $img            = $request['img'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_product (id_category,name,price,description,img,is_active,update_by) values (?,?,?,?,?,?,?)", [$id_category,$name,$price,$description,$img,$is_active,$update_by]);

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

    function layanan()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listlayanan();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Layanan',
            'arr'       => $arr,
        );

        return view('MasterData.layanan')->with($data);
    }

    function addlayanan(Request $request)
    {
        $name       = $request['name'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_layanan (name,is_active,update_by) values (?,?,?)", [$name,$is_active,$update_by]);

        return response('success');
    }

}
