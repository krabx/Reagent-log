<?php
// функции страницы с реагентами
function create(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO reagent (name, adress, weight, weight_name, price, type, style) VALUES ('$name','$adress','$weight','$weight_name','$price','$type', '$type')";
    mysqli_query($database, $query);
}

function create_table(){
    
        global $database;
        $query = "SELECT * FROM reagent ORDER by id DESC";
        $res = mysqli_query($database,$query);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
        }

function get_style(){
    global $database;
        $query = "SELECT * FROM reagent where `style`";
        $res = mysqli_query($database,$query);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

        /*if (isset($_POST['FL'])){
            global $database;
            $query = "SELECT * FROM reagent WHERE `type` = 'Ускоритель'";
            $res = mysqli_query($database,$query);
            return mysqli_fetch_all($res, MYSQLI_ASSOC);
            die;
        }*/

function date_online(){
    $date = date('H:i:s d-m-Y');
    return $date;
}

function transit(){
    if (isset($_POST['cement_sample'])){
        header("Location: cement_sample.php");
    die;}
    if (isset($_POST['mud_sample'])){
        header("Location: mud_sample.php");
    die;}
    if (isset($_POST['login'])){
        header("Location: login.php");
    die;}
    if (!empty($_POST)){
            create(); 
            header ("Location: {$_SERVER['PHP_SELF']}");
            die;
        }
        }






// функции страницы с цементами
function transit_1(){
    if (isset($_POST['reagent_sample'])){
        header("Location: code.php");
    die;}
    if (isset($_POST['mud_sample'])){
        header("Location: mud_sample.php");
    die;}
        if (!empty($_POST)){
            insert_well_conditions();
            insert_cement_composition();
            insert_gost_test();
            insert_api_test();
            insert_before_conditioning_rheology_test();
            insert_after_conditioning_rheology_test();
            header ("Location: {$_SERVER['PHP_SELF']}");
            die;
        }
}

function insert_well_conditions(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO `well_conditions` (`cirk`, `unit_1`, `stat`, `unit_2`, `pressure`, `unit_3`, `measure_depth`, `unit_4`, `vertical_depth`, `unit_5`) VALUES ('$cirk','$unit_1','$stat','$unit_2','$pressure','$unit_3', '$measure_depth', '$unit_4', '$vertical_depth', '$unit_5')";
    mysqli_query($database, $query);
}

function insert_table_well_conditions(){
    global $database;
    $query = "SELECT * FROM `well_conditions` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

// Таблица для состава смеси
function insert_cement_composition(){
    global $database;
    extract($_POST);
    for ( $i = 0; $i<count($number); $i++){
        $query = "INSERT INTO `cement_composition` (`number`, `material`, `concentration`, `unit_concentration`) VALUES ('$number[$i]','$material[$i]','$concentration[$i]', '$unit_concentration[$i]')";
        mysqli_query($database, $query);
    }
}


function insert_table_cement_composition(){
    global $database;
    $query = "SELECT * FROM `cement_composition` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


// Таблица для ГОСТа

function insert_gost_test(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO `gost_test` (`density_gost`, `unit_density_gost`, `spreadability_gost`, `unit_spreadability_gost`, `tt_gost`, `unit_tt_gost`, `freefluid_gost`, `unit_freefluid_gost`, `bend_gost`, `unit_bend_gost`, `compression_gost`, `unit_compression_gost`) VALUES ('$density_gost', '$unit_density_gost', '$spreadability_gost', '$unit_spreadability_gost', '$tt_gost', '$unit_tt_gost', '$freefluid_gost', '$unit_freefluid_gost', '$bend_gost', '$unit_bend_gost', '$compression_gost', '$unit_compression_gost')";
    mysqli_query($database, $query);
}

function insert_table_gost_test(){
    global $database;
    $query = "SELECT * FROM `gost_test` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


// Таблица для API

function insert_api_test(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO `api_test` (`mixing_time`, `unit_mixing_time`, `density_API`, `unit_density_API`, `tt_API`, `unit_tt_API`, `freefluid_API`, `unit_freefluid_API`, `fluidloss_API`, `unit_fluidloss_API`, `compression_API`, `unit_compression_API`, `time_compression_API`, `UCA_API`, `unit_UCA_API`, `time_UCA_API`, `expansion_API`, `unit_expansion_API`, `time_expansion_API`) VALUES ('$mixing_time', '$unit_mixing_time', '$density_API', '$unit_density_API', '$tt_API', '$unit_tt_API', '$freefluid_API', '$unit_freefluid_API', '$fluidloss_API', '$unit_fluidloss_API', '$compression_API', '$unit_compression_API', '$time_compression_API', '$UCA_API', '$unit_UCA_API', '$time_UCA_API', '$expansion_API', '$unit_expansion_API', '$time_expansion_API')";
    mysqli_query($database, $query);
}

function insert_table_api_test(){
    global $database;
    $query = "SELECT * FROM `api_test` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

// Функции для заполнения таблиц реологии

function insert_before_conditioning_rheology_test(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO `before_conditioning_rheology` (`rheology_API_3`, `rheology_API_6`, `rheology_API_30`, `rheology_API_60`, `rheology_API_100`, `rheology_API_200`, `rheology_API_300`, `PV`, `YP`) VALUES ('$rheology_API_3', '$rheology_API_6', '$rheology_API_30', '$rheology_API_60', '$rheology_API_100', '$rheology_API_200', '$rheology_API_300', '$PV', '$YP')";
    mysqli_query($database, $query);
}

function insert_table_before_conditioning_rheology_test(){
    global $database;
    $query = "SELECT * FROM `before_conditioning_rheology` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function insert_after_conditioning_rheology_test(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO `after_conditioning_rheology` (`rheology_API_3_after`, `rheology_API_6_after`, `rheology_API_30_after`, `rheology_API_60_after`, `rheology_API_100_after`, `rheology_API_200_after`, `rheology_API_300_after`, `PV_after`, `YP_after`) VALUES ('$rheology_API_3_after', '$rheology_API_6_after', '$rheology_API_30_after', '$rheology_API_60_after', '$rheology_API_100_after', '$rheology_API_200_after', '$rheology_API_300_after', '$PV_after', '$YP_after')";
    mysqli_query($database, $query);
}

function insert_table_after_conditioning_rheology_test(){
    global $database;
    $query = "SELECT * FROM `after_conditioning_rheology` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}





//функции страницы с БР
function transit_2(){
    if (isset($_POST['reagent_sample'])){
        header("Location: code.php");
    die;}
    if (isset($_POST['cement_sample'])){
        header("Location: cement_sample.php");
    die;}
        if (!empty($_POST)){
            insert_mud(); 
            insert_mud_composition();
            header ("Location: {$_SERVER['PHP_SELF']}");
            die;
        }
}


function insert_mud(){
    global $database;
    extract($_POST);
    $query = "INSERT INTO `mud` (`density_mud`, `unit_density_mud`, `FV`, `metodic`, `filtrate`, `degree`, `coefficient`, `PV_mud`, `YP_mud`, `sec_10_mud`, `min_10_mud`, `sand`) VALUES ('$density_mud', '$unit_density_mud', '$FV', '$metodic', '$filtrate', '$degree', '$coef', '$PV_mud', '$YP_mud', '$sec_10_mud', '$min_10_mud', '$sand')";
    mysqli_query($database, $query);
}

function insert_table_mud(){
    global $database;
    $query = "SELECT * FROM `mud` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function insert_mud_composition(){
    global $database;
    extract($_POST);
    for ( $i = 0; $i<count($mud_number); $i++){
        $query = "INSERT INTO `mud_composition` (`mud_number`, `mud_material`, `mud_concentration`, `mud_unit_concentration`) VALUES ('$mud_number[$i]','$mud_material[$i]','$mud_concentration[$i]', '$mud_unit_concentration[$i]')";
        mysqli_query($database, $query);
    }
}


function insert_table_mud_composition(){
    global $database;
    $query = "SELECT * FROM `mud_composition` ORDER by id DESC";
    $res = mysqli_query($database,$query);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}




function print_arr($arr){
    echo '<pre>';
    echo print_r($arr,1);
    echo '</pre>';
}




?>