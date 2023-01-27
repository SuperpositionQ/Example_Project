<?php

include("connectivity.php");

$id =  $_GET['id'];

$query = "DELETE FROM tbl_user WHERE user_id = $id";

$result = mysqli_query($connection,$query);

if($result)
{
    echo "<script> alert('Record deleted');
    window.location.href = 'User.php';
    </script>";
}

?>