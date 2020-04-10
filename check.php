<?php
session_start();
$c=$_REQUEST["c"];
echo $c;
if($c==1){
    session_destroy();
    echo "logout";
    header("Location:index.php");
}
?>