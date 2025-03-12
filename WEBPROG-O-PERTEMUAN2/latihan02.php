<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?='Judul Page'?></title>
</head>
<body>

<?php
    echo "<h3>Belajar PHP</h3>";
    echo "<ul>";
    echo "<li>Membuat Script Sederhana</li>";
    echo "<li>Menyisipkan Script PHP pada Dokumen HTML</li>";
    echo "<li>Menyisipkan external script PHP pada Dokumen HTML</li>";
    echo "<li>Bisa Yuk</li>";
    echo "</ul>";

    include("latihan01.php");
    require("latihan01.php");

?>


</body>
</html>