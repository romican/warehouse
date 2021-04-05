<?php include('database/db.php');      

$errMsg = '';

    $tracknum = $_POST['tracknum'];
    $p_unidentified = $_POST['p_unidentified'];

if ($_POST) {
    
    $arr_prim_par = [
        'tracknum' => $tracknum,
        'p_unidentified' => $p_unidentified
    ];

   insert('primary_parcel', $arr_prim_par);
    //tt($_POST);
}
?>