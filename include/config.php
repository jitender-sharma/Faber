<?php

    $global['dbhost'] = "localhost";
    $global['dbname'] = "fabercapital";
    $global['dbuser'] = "root";
    $global['dbpass'] = "nimda99123";
    
    mysql_connect($global['dbhost'], $global['dbuser'], $global['dbpass']) or die(mysql_error());
    mysql_select_db($global['dbname']) or die(mysql_error());
    
?>
