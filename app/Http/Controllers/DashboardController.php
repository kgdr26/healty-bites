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
        $data = array(
            'idn_user'  => $idn_user,
            'title' => 'Dashboard'
        );

        return view('Dashboard.list')->with($data);
    }

}