<?php

/**
 *  
 *  
 */

require_once( 'inc/header.inc.php' );
require_once( BX_DIRECTORY_PATH_INC . 'db.inc.php' );

$ID = urldecode($_SERVER['QUERY_STRING']);
$ID = (int)$ID;

$bann_arr = db_arr("SELECT `ID`, `Url` FROM `sys_banners` WHERE `ID` = $ID LIMIT 1");
$ID = (int)$bann_arr['ID'];
$Url = $bann_arr['Url'];

if ( $ID > 0 ) {
    db_res("INSERT INTO `sys_banners_clicks` SET `ID` = $ID, `Date` = ".time().", `IP` = '". $_SERVER['REMOTE_ADDR']. "'", 0);

    header ("HTTP/1.1 301 Moved Permanently");
    header ("Location: $Url");
    exit;
} else {
    echo "No such link";
}
