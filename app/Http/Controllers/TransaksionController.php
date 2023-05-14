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

class TransaksionController extends Controller
{
    function admpesanan()
    {
        $idn_user   = idn_user(auth::user()->id);
        $arr        = listpesananall();
        $seat       = listseat();
        $data = array(
            'idn_user'  => $idn_user,
            'title'     => 'Pesanan',
            'arr'       => $arr,
            'seat'      => $seat
        );

        return view('Transaksi.list')->with($data);
    }

    function approve_order(Request $request)
    {
        $id_order         = $request['id_order'];
        $tahap_order      = $request['tahap_order'];

        if($tahap_order == 1){
            $thp = 2;
        }else if($tahap_order == 4){
            $thp = 2;
        }else if($tahap_order == 2){
            $thp = 6;
        }else{
            $thp = 5;
        }

        $data       = array(
            'id_tahap_order'    => $thp,
        );
        $update     = actionupdate('trx_order',$id_order,$data);

        return response('success');
    }

}
