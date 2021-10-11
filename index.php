<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUK</title>
</head>
<body>
<?php require 'menu.php' ; ?>
<h2>PRODUK</h2>

<?php
$produk = [
    'nama' => 'Drinking Water',
    'size' => 500,
    'Harga' => 70,
];
?>
<table>
    <tr>
        <td>Nama:</td>
        <td><?php echo $produk['nama']; ?></td>
    </tr>
    <tr>
        <td>Size:</td>
        <td><?php echo $produk['size']; ?> ml</td>
    </tr>
    <tr>
        <td>Harga:</td>
        <td><?php echo $produk['Harga']; ?> sen</td>
    </tr>
</table>
</body>
</html>