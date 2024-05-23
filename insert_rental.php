<?php
    require_once "conn.php";

    $query = "SELECT MAX(id) AS ID FROM kabora";
    $getdata = mysqli_query($conn, $query);
    $iddata = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($getdata)) {
            $iddata[] = $row;
        }
    }
    $newid = $iddata[0]['ID']+1;

    $query = "INSERT INTO kabora VALUES({$newid}, '{$_POST['plat_no']}', '{$_POST['jenis']}','{$_POST['merek']}','{$_POST['warna']}')";
    $getdata = mysqli_query($conn, $query);

    header("Location: index.php");
?>