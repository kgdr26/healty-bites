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

    function upload_img_cat(Request $request)
    {

        if ($request->hasFile('add_image')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/img/category/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_image')->move($path, $fileName);

            return response($fileName);
        }

    }

    function addcategory(Request $request)
    {
        $name       = $request['name'];
        $price      = (int) str_replace(array('Rp', '.', ','), '', $request['price']);
        $foto       = $request['foto'];
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_category (name,price,foto,is_active,update_by) values (?,?,?,?,?)", [$name,$price,$foto,$is_active,$update_by]);

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
        $bahan      = listbahan();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Product',
            'arr'       => $arr,
            'product'   => $product,
            'bahan'     => $bahan
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
        if($request['bread'] == ''){
            $bread          = "[]";
        }else{
            $bread          = json_encode($request['bread']);
        }

        if($request['greens'] == ''){
            $greens          = "[]";
        }else{
            $greens         = json_encode($request['greens']);
        }

        if($request['toppings'] == ''){
            $toppings          = "[]";
        }else{
            $toppings       = json_encode($request['toppings']);
        }

        if($request['dressings'] == ''){
            $dressings          = "[]";
        }else{
            $dressings      = json_encode($request['dressings']);
        }

        $wishlist   = "[]";
        $is_active  = 1;
        $update_by  = auth::user()->id;

        DB::insert("INSERT INTO mst_product (id_category,name,price,description,img,bread,greens,toppings,dressings,wishlist,is_active,update_by) values (?,?,?,?,?,?,?,?,?,?,?,?)", [$id_category,$name,$price,$description,$img,$bread,$greens,$toppings,$dressings,$wishlist,$is_active,$update_by]);

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

    function viewdataprod(Request $request)
    {
        $id         = $request['id'];
        $arr        = viewdataprod($id);
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

    function contentlayanan()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listlayanan();
        $content    = listcontentlayanan();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Layanan',
            'arr'       => $arr,
            'content'   => $content,
        );

        return view('MasterData.contentlayanan')->with($data);
    }

    function addcontentlayanan(Request $request)
    {
        $id_layanan     = $request['id_layanan'];
        $name           = $request['name'];
        $content        = $request['content'];
        $is_active      = 1;
        $update_by      = auth::user()->id;

        DB::insert("INSERT INTO mst_contentlayanan (id_layanan,name,content,is_active,update_by) values (?,?,?,?,?)", [$id_layanan,$name,$content,$is_active,$update_by]);

        return response('success');
    }

    function bahan()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listbahan();
        $category   = listcategory();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Material',
            'arr'       => $arr,
            'category'  => $category,
        );

        return view('MasterData.bahan')->with($data);
    }

    function upload_img_bahan(Request $request)
    {

        if ($request->hasFile('add_image')) {
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/img/bahan/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_image')->move($path, $fileName);

            return response($fileName);
        }

    }

    function addbahan(Request $request)
    {

        $type_bahan     = $request['type_bahan'];
        $name           = $request['name'];
        $serving        = $request['serving'];
        $energy         = $request['energy'];
        $protein        = $request['protein'];
        $fat            = $request['fat'];
        $carbohydrate   = $request['carbohydrate'];
        $price          = (int) str_replace(array('Rp', '.', ','), '', $request['price']);
        $foto           = $request['foto'];
        $is_active      = 1;
        $update_by      = auth::user()->id;

        DB::insert("INSERT INTO mst_bahan (name,serving,energy,protein,fat,carbohydrate,foto,type_bahan,price,is_active,update_by) values (?,?,?,?,?,?,?,?,?,?,?)", [$name,$serving,$energy,$protein,$fat,$carbohydrate,$foto,$type_bahan,$price,$is_active,$update_by]);

        return response('success');
    }

}
