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
        $data = array(
            'title'         => 'Healty Bites',
            'page'          => 'landingpage.home',       
            'category'      => $category,
            'product'       => $product
        );

        return view('landingpage.list')->with($data);
    }

}
