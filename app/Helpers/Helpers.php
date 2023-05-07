<?php

function idn_user($id){
    $arr    = collect(\DB::select("SELECT a.*, b.name AS name_role FROM users a LEFT JOIN  mst_role b ON a.role_id=b.id WHERE a.id='$id'"))->first();
    return $arr;
}

//Action Cek Data
function cekdata($data){
    $table      = $data['table'];
    $whr        = $data['whr'];
    $id         = $data['id'];

    $arr['row'] = collect(\DB::select("SELECT * FROM $table WHERE $whr='$id'"))->first();

    return $arr;
}
//End Action Cek Data

//Action Role
function listrole(){
    $arr   = DB::select("SELECT * FROM mst_role");

    return $arr;
}

//End Action Role

//Action Users
function listusers(){
    $arr   = DB::select("SELECT a.*, b.name AS role_name FROM users a LEFT JOIN mst_role b ON a.role_id=b.id");

    return $arr;
}

//End Action Users

//Action Category
function listcategory(){
    $arr   = DB::select("SELECT * FROM mst_category");

    return $arr;
}

//End Action Category

//Action Product
function listproduct(){
    $arr   = DB::select("SELECT * FROM mst_product");

    return $arr;
}

//End Action Product

//Action Layanan
function listlayanan(){
    $arr   = DB::select("SELECT * FROM mst_layanan");

    return $arr;
}

//End action layanan

?>
