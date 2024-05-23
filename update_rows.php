<?php
    require_once "conn.php";

    $query = "UPDATE kabora SET plat_no = '{$_POST['plat_no']}', jenis = '{$_POST['jenis']}', merek = '{$_POST['merek']}', warna = '{$_POST['warna']}' WHERE id = {$_POST['id']}";
    $getdata = mysqli_query($conn, $query);

    header("Location: index.php");
?>