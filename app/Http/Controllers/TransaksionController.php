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

}
