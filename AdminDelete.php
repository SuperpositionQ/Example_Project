<?php

include("connectivity.php");

$id =  $_GET['id'];

$query = "DELETE FROM tbl_admin WHERE id = $id";

$result = mysqli_query($connection,$query);

if($result)
{
    echo "<script> alert('Record deleted');
    window.location.href = 'dasboard.php';
    </script>";
}

?>