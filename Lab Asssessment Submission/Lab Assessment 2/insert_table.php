<?php

$link =mysqli_connect('localhost','root','','VS_CODE_TEST');
if($link == false)
{
    die("Error: Couldnot connect".mysqli_connect_error());
}

$sql ="INSERT INTO test_table(id,username,password) VALUES
('2','Demo','Demo')";
   
if(mysqli_query($link,$sql)){
    echo "Value Inserted";
}
else
{
    echo "ERROR: couldn't able to insert values".mysqli_error($link);
}
mysqli_close($link);

?>
