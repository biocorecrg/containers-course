<?php

/** Simple PHP interface web script **/
$blastdbcmd = "/usr/local/bin/blastdbcmd";
$blastdb = "/blastdb";
$db = "swissprot";
$dbtype = "prot";

$dbconfig = "/conf/mysql.json";

$conf = json_decode( $dbconfig, true );


if ( array_key_exists( "id", $_REQUEST ) ) {

    $id = $_REQUEST["id"];
    
    if ( array_key_exists( "db", $_REQUEST ) ) {
        $db = $_REQUEST["db"];
    }
    
    $output = shell_exec("$blastdbcmd -dbtype $dbtype -db $blastdb/$db -entry $id");
    
    echo $output;
    
    if ( $conf && array_key_exists( "host", $conf ) ) {
        
        # Proceed MySQL Loading
    }

} else {
    
    echo "Nothing to see here";

}

