<?php
    require_once 'connect.php';

    $id=$_GET['id_sp'];
    $sql="DELETE FROM sp WHERE id_sp=$id";
    $query=mysqli_query($conn,$sql);
    header("location:index.php");
?>
