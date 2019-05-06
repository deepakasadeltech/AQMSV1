<?php

$datefrom = date('d.m.Y');
$dateto = 'MTAuMDUuMjAxOQ==';  //10.05.2019
//$key = '';

//-------------------------

$nMac = GetMAC();
$lMac = 'QkMtQTgtQTYtOTAtRkYtQkY=';  //BC-A8-A6-90-FF-BF
//echo GetMAC();

function GetMAC(){
    ob_start();
    system('getmac');
    $Content = ob_get_contents();
    ob_clean();
    return substr($Content, strpos($Content,'\\')-20, 17);
}
 ?>