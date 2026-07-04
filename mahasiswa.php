<?php
require 'fungsi.php';

$mahasiswa = tampildata("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav class="navbar">
    <a href="index.php">Home</a>
    <a href="biodata.php">Biodata</a>
    <a href="kontak.php">Kontak</a>
    <a href="mahasiswa.php">Data Mahasiswa</a>
</nav>

<table border="1" cellpadding="10" align="center">

<tr>
    <th>No</th>
    <th>Nama</th>
</tr>

<?php $i=1; ?>
<?php foreach($mahasiswa as $row): ?>

<tr>
    <td><?= $i++; ?></td>
    <td><?= $row["NAMA"]; ?></td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>