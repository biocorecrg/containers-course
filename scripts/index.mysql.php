<?php

/** Simple PHP interface web script **/
$blastdbcmd = "/usr/local/bin/blastdbcmd";
$blastdb = "/blastdb";
$db = "swissprot";
$dbtype = "prot";

$dbconfig = "/config/mysql.json";

$conf = json_decode( file_get_contents( $dbconfig ), true );


if ( array_key_exists( "id", $_REQUEST ) ) {

    $id = $_REQUEST["id"];
    
    if ( array_key_exists( "db", $_REQUEST ) ) {
        $db = $_REQUEST["db"];
    }
    
    $output = shell_exec("$blastdbcmd -dbtype $dbtype -db $blastdb/$db -entry $id");
    
    echo $output;
    
    if ( $conf && array_key_exists( "host", $conf ) ) {
        
        # Proceed MySQL Loading     
        $link = mysqli_connect( $conf['host'], $conf['user'], $conf['passwd'], "blast" );
        
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
        # Create table
        $tablecreate = mysqli_prepare( $link, "CREATE TABLE IF NOT EXISTS `visits` ( id varchar(24), ts TIMESTAMP DEFAULT CURRENT_TIMESTAMP );" );
        mysqli_stmt_execute( $tablecreate );
        
        # Insert table
        $insert = mysqli_prepare( $link, "INSERT INTO `visits` ( `id` ) VALUES ( ? ) ;" );
		mysqli_stmt_bind_param( $insert, "s", $id );
        mysqli_stmt_execute( $insert );

        mysql_close($link);
    }

} else {
    
    echo "Nothing to see here";

}

