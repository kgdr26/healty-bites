<?php

// Action Update Data
function actionupdate($table,$id,$data){
    DB::table($table)->where('id', $id)->update($data);
}
// End Action

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
    $arr   = DB::select("SELECT * FROM mst_role WHERE is_active=1");

    return $arr;
}

//End Action Role

//Action Users
function listusers(){
    $arr   = DB::select("SELECT a.*, b.name AS role_name FROM users a LEFT JOIN mst_role b ON a.role_id=b.id WHERE a.is_active=1");

    return $arr;
}

//End Action Users

//Action Category
function listcategory(){
    $arr   = DB::select("SELECT * FROM mst_category WHERE is_active=1");

    return $arr;
}

//End Action Category

//Action Product
function listproduct(){
    $arr   = DB::select("SELECT * FROM mst_product WHERE is_active=1");

    return $arr;
}

//End Action Product

//Action Layanan
function listlayanan(){
    $arr   = DB::select("SELECT * FROM mst_layanan WHERE is_active=1");

    return $arr;
}

//End action layanan

//Action Layanan
function listcontentlayanan(){
    $arr   = DB::select("SELECT * FROM mst_contentlayanan WHERE is_active=1");

    return $arr;
}

//End action layanan

//Action Bahan
function listbahan(){
    $arr   = DB::select("SELECT * FROM mst_bahan WHERE is_active=1");

    return $arr;
}

//End action Bahan

//Action seat
function listseat(){
    $arr   = DB::select("SELECT * FROM mst_seat WHERE is_active=1");

    return $arr;
}

//End action seat

function viewdataprod($id){
    $data       = collect(\DB::select("SELECT * FROM mst_product WHERE id='$id'"))->first();
    $bahan      = DB::select("SELECT * FROM mst_bahan");

    $description= $data->description;
    $price      = 'Rp '. number_format($data->price, 0, ',', '.');
    $foto       = 'img/product/'.$data->img;
    $image      = '<div class="position-relative"><img src="'.$foto.'" class="w-100" alt=""><div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div></div>';
    
    $total_serving      = 0;
    $total_energy       = 0;
    $total_protein      = 0;
    $total_fat          = 0;
    $total_carbohydrate = 0;

    $data_bread     = json_decode($data->bread);
    $bread      = '';
    if(count($data_bread) == 0){
        $bread .= '<tr>';
        $bread .= '<td colspan="8" class="text-center">Data Not Availible</td>';
        $bread .= '</tr>';
    }else{
        foreach($data_bread as $key => $val){
            foreach($bahan as $k => $v){
                if($v->id == $val){
                    $no     = $k + 1;
                    $bread .= '<tr>';
                    $bread .= '<td>'.$no.'</td>';
                    $bread .= '<td><img src="img/bahan/'.$v->foto.'" alt="" style="width: 4rem"></td>';
                    $bread .= '<td>'.$v->name.'</td>';
                    $bread .= '<td class="text-center">'.$v->serving.' g</td>';
                    $bread .= '<td class="text-center">'.$v->energy.' kcals</td>';
                    $bread .= '<td class="text-center">'.$v->protein.' g</td>';
                    $bread .= '<td class="text-center">'.$v->fat.' g</td>';
                    $bread .= '<td class="text-center">'.$v->carbohydrate.' g</td>';
                    $bread .= '</tr>';

                    $total_serving      += $v->serving;
                    $total_energy       += $v->energy;
                    $total_protein      += $v->protein;
                    $total_fat          += $v->fat;
                    $total_carbohydrate += $v->carbohydrate;
                }
            }
        }
    }

    $data_greens    = json_decode($data->greens);
    $greens     = '';
    if(count($data_greens) == 0){
        $bread .= '<tr>';
        $bread .= '<td colspan="8" class="text-center">Data Not Availible</td>';
        $bread .= '</tr>';
    }else{
        foreach($data_greens as $key => $val){
            foreach($bahan as $k => $v){
                if($v->id == $val){
                    $no     = $k + 1;
                    $greens .= '<tr>';
                    $greens .= '<td>'.$no.'</td>';
                    $greens .= '<td><img src="img/bahan/'.$v->foto.'" alt="" style="width: 4rem"></td>';
                    $greens .= '<td>'.$v->name.'</td>';
                    $greens .= '<td class="text-center">'.$v->serving.' g</td>';
                    $greens .= '<td class="text-center">'.$v->energy.' kcals</td>';
                    $greens .= '<td class="text-center">'.$v->protein.' g</td>';
                    $greens .= '<td class="text-center">'.$v->fat.' g</td>';
                    $greens .= '<td class="text-center">'.$v->carbohydrate.' g</td>';
                    $greens .= '</tr>';

                    $total_serving      += $v->serving;
                    $total_energy       += $v->energy;
                    $total_protein      += $v->protein;
                    $total_fat          += $v->fat;
                    $total_carbohydrate += $v->carbohydrate;
                }
            }
        }
    }

    $data_toppings    = json_decode($data->toppings);
    $toppings   = '';
    if(count($data_toppings) == 0){
        $bread .= '<tr>';
        $bread .= '<td colspan="8" class="text-center">Data Not Availible</td>';
        $bread .= '</tr>';
    }else{
        foreach($data_toppings as $key => $val){
            foreach($bahan as $k => $v){
                if($v->id == $val){
                    $no     = $k + 1;
                    $toppings .= '<tr>';
                    $toppings .= '<td>'.$no.'</td>';
                    $toppings .= '<td><img src="img/bahan/'.$v->foto.'" alt="" style="width: 4rem"></td>';
                    $toppings .= '<td>'.$v->name.'</td>';
                    $toppings .= '<td class="text-center">'.$v->serving.' g</td>';
                    $toppings .= '<td class="text-center">'.$v->energy.' kcals</td>';
                    $toppings .= '<td class="text-center">'.$v->protein.' g</td>';
                    $toppings .= '<td class="text-center">'.$v->fat.' g</td>';
                    $toppings .= '<td class="text-center">'.$v->carbohydrate.' g</td>';
                    $toppings .= '</tr>';

                    $total_serving      += $v->serving;
                    $total_energy       += $v->energy;
                    $total_protein      += $v->protein;
                    $total_fat          += $v->fat;
                    $total_carbohydrate += $v->carbohydrate;
                }
            }
        }
    }

    $data_dressings    = json_decode($data->dressings);
    $dressings  = '';
    if(count($data_dressings) == 0){
        $bread .= '<tr>';
        $bread .= '<td colspan="8" class="text-center">Data Not Availible</td>';
        $bread .= '</tr>';
    }else{
        foreach($data_dressings as $key => $val){
            foreach($bahan as $k => $v){
                if($v->id == $val){
                    $no     = $k + 1;
                    $dressings .= '<tr>';
                    $dressings .= '<td>'.$no.'</td>';
                    $dressings .= '<td><img src="img/bahan/'.$v->foto.'" alt="" style="width: 4rem"></td>';
                    $dressings .= '<td>'.$v->name.'</td>';
                    $dressings .= '<td class="text-center">'.$v->serving.' g</td>';
                    $dressings .= '<td class="text-center">'.$v->energy.' kcals</td>';
                    $dressings .= '<td class="text-center">'.$v->protein.' g</td>';
                    $dressings .= '<td class="text-center">'.$v->fat.' g</td>';
                    $dressings .= '<td class="text-center">'.$v->carbohydrate.' g</td>';
                    $dressings .= '</tr>';

                    $total_serving      += $v->serving;
                    $total_energy       += $v->energy;
                    $total_protein      += $v->protein;
                    $total_fat          += $v->fat;
                    $total_carbohydrate += $v->carbohydrate;
                }
            }
        }
    }

    $arr['foto']        = $image;
    $arr['price']       = $price;
    $arr['description'] = $description;
    $arr['bread']       = $bread;
    $arr['greens']      = $greens;
    $arr['toppings']    = $toppings;
    $arr['dressings']   = $dressings;

    $arr['total_serving']       = $total_serving;
    $arr['total_energy']        = $total_energy;
    $arr['total_protein']       = $total_protein;
    $arr['total_fat']           = $total_fat;
    $arr['total_carbohydrate']  = $total_carbohydrate;

    return $arr;
}

function listpesanan($id_user){
    $arr   = DB::select("SELECT a.kode, a.harga, a.id_product, a.id AS id_order, a.qty, a.order_methode, a.payment_methode, a.id_meja, a.id_tahap_order, a.bukti_pembayaran, b.name AS name_tahap, c.name AS name_product FROM trx_order a LEFT JOIN mst_tahap_order b ON a.id_tahap_order=b.id LEFT JOIN mst_product c ON a.id_product=c.id WHERE a.id_user='$id_user'");

    return $arr;
}

function listpesananall(){
    $arr   = DB::select("SELECT a.kode, a.harga, a.id_product, a.id AS id_order, a.qty, a.order_methode, a.payment_methode, a.id_meja, a.id_tahap_order, a.bukti_pembayaran, b.name AS name_tahap, c.name AS name_product, d.name AS name_cus FROM trx_order a LEFT JOIN mst_tahap_order b ON a.id_tahap_order=b.id LEFT JOIN mst_product c ON a.id_product=c.id LEFT JOIN users d ON a.id_user=d.id");

    return $arr;
}

function addwishlit($id,$id_usr){
    $arr    = collect(\DB::select("SELECT * FROM mst_product WHERE id='$id'"))->first();
    $dw     = json_decode($arr->wishlist);
    $ct_dw  = count($dw);
    $dat    = '';
    if($ct_dw == 0){
        $dat    .= '["'.$id_usr.'"]';
    }else{
        $dat    .= '[';
        foreach($dw as $Key => $val){
            $dat    .= '"'.$val.'",';
        }
        $dat    .= '"'.$id_usr.'"]';
    }

    DB::table('mst_product')->where('id', $id)->update(['wishlist' => $dat]);
    return 'success';

    // $dat['show']    = $dat;

    // return $dat;
}

?>
