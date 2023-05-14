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

class CustomerController extends Controller
{
    function DashCus()
    {
        $idn_user   = idn_user(auth::user()->id);
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Dashboard'
        );

        return view('Dashboard.list')->with($data);
    }

    function cusprod()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listcategory();
        $product    = listproduct();
        $bahan      = listbahan();
        $seat       = listseat();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Product',
            'arr'       => $arr,
            'product'   => $product,
            'bahan'     => $bahan,
            'seat'      => $seat
        );

        return view('Customer.product')->with($data);
    }

    function createorder(Request $request)
    {
        $id_product         = $request['id_product'];
        $jns_product        = $request['jns_product'];
        $qty                = $request['qty'];
        $harga              = $request['harga'];
        $order_methode      = $request['order_methode'];
        $payment_methode    = $request['payment_methode'];
        $id_meja            = $request['id_meja'];

        $countrows          = DB::select("SELECT * FROM trx_order");
        $cn                 = sprintf("%04d",(count($countrows)+1));
        $kode               = "ORD.".date('Y').".".date('m').".".$cn;
        $id_tahap_order     = 1;
        $tgl_order          = date('Y-m-d H:i:s');
        $id_user            = auth::user()->id;

        DB::insert("INSERT INTO trx_order (kode,id_product,jns_product,qty,harga,order_methode,payment_methode,id_meja,id_tahap_order,tgl_order,id_user) values (?,?,?,?,?,?,?,?,?,?,?)", [$kode,$id_product,$jns_product,$qty,$harga,$order_methode,$payment_methode,$id_meja,$id_tahap_order,$tgl_order,$id_user]);

        if($id_meja != 0 || $id_meja != '' || $id_meja != null){
            $data       = array(
                'status'    => 1
            );
            $update     = actionupdate('mst_seat',$id_meja,$data);
        }

        return response('success');

    }

    function cuspesanan()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listpesanan(auth::user()->id);
        $seat       = listseat();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Pesanan',
            'arr'       => $arr,
            'seat'      => $seat
        );

        return view('Customer.pesanan')->with($data);
    }

}
