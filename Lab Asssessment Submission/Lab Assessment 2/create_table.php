<?php

$link =mysqli_connect('localhost','root','','VS_CODE_TEST');
if($link == false)
{
    die("Error: Couldnot connect".mysqli_connect_error());
}

$sql ="CREATE TABLE test_table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";
if(mysqli_query($link,$sql)){
    echo "tABLE created";
}
else
{
    echo "error: couldn't able to create TABLE".mysqli_error($link);
}
mysqli_close($link);

?>
