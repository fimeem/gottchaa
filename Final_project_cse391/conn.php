<?php
    $host = "sql209.epizy.com";
    $username = "epiz_26818501";
    $password = "C2VgqAuHGwUjda";
    $dbName = "epiz_26818501_gottchaa";

    $mysqli = new mysqli($host, $username, $password, $dbName);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    }
?>