<?php
session_start(true);
//funny af
//https://www.youtube.com/watch?v=_VJ8aaCgYN0&list=PLwH4Oojw91VseuKwMz2YCgoihWCPWDuo4&index=4
//connection
$db_host = "localhost:8888";
$db_user = "root";
$db_pass = "root";
$db_base = "postIt";

$conn = new mysqli($db_host , $db_user , $db_pass , $db_base);
?>