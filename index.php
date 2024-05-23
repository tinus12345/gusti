<?php
    require_once "conn.php";

    $getdata = mysqli_query($conn, "SELECT * FROM kabora");
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
    <title>kabora</title>
    <link rel="stylesheet" href="display.css" />
</head>
<body>
    <a href="insert_from.php" class="button primary-button mb-16">Create</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>plat_no</td>
                <td>jenis</td>
                <td>merek</td>
                <td>warna</td>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i=0; $i < $numrows; $i++) { 
                    echo "
                        <tr>
                            <td><a href='detail.php?id={$data[$i]['id']}'>{$data[$i]['id']}</a></td>
                            <td>{$data[$i]['plat_no']}</td>
                            <td>{$data[$i]['jenis']}</td>
                            <td>{$data[$i]['merek']}</td>
                            <td>{$data[$i]['warna']}</td>
                            <td><a href='delete_rows.php?id={$data[$i]['id']}' class='button danger-button'>hapus</a></td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>
