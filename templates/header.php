<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $list_siswa = include('config/data.php');
    ?>
    <h3>Jumlah siswa: <?= count($list_siswa) ?> </h3>
</body>
</html>