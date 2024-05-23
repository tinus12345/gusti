<?php
    require_once "conn.php";
    
    $id = $_GET['id'];
    // echo $_GET['nama'];
    $query = "SELECT * FROM kabora WHERE ID = {$id}";
    $getdata = mysqli_query($conn, $query);
    $data = [];
    $numrows = mysqli_num_rows($getdata);

    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($getdata)) {
            $data[] = $row;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data[0]['Name'] ?> - Detail</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <form action="update_rows.php" method="POST">
        
        merek : <?= "<input type='hidden' name='id' value='{$data[0]['id']}'> <input type='text' name='merek' value='{$data[0]['merek']}'>" ?><br />
        plat_no : <?= "<input type='text' name='plat_no' value='{$data[0]['plat_no']}'>"; ?><br />
        jenis : <?= "<input type='text' name='jenis' value='{$data[0]['jenis']}'>"; ?><br />
        merek : <?= "<input type='text' name='merek' value='{$data[0]['merek']}'>"; ?><br />
        warna : <?= "<input type='text' name='warna' value='{$data[0]['warna']}'>"; ?><br />
        <button type="submit" class="button primary-button mt-16">Update</button>
    </form>
