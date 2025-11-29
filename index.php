<?php
require_once "Database.php";

class Buku extends Database {
    public function getData() {
        $query = "SELECT * FROM buku";
        return $this->conn->query($query);
    }
}

$obj = new Buku();
$data = $obj->getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toko Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Toko Buku</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Harga</th>
    </tr>

    <?php while ($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['penulis'] ?></td>
        <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
