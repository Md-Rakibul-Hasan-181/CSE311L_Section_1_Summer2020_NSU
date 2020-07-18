<?php

$link =mysqli_connect('localhost','root','');
if($link == false)
{
    die("Error: Couldnot connect".mysqli_connect_error());
}
$sql ="CREATE DATABASE VS_CODE_TEST";
if(mysqli_query($link,$sql)){
    echo "DB created";
}
else
{
    echo "error: couldn't able to create DB".mysqli_error($link);
}
mysqli_close($link);

?>
