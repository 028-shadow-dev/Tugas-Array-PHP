<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        main {
            flex: 1; 
        }

        table {
            border-collapse: collapse; 
            width: 100%; 
        }

        table, tr, td, th {
            border: 1px solid #333333;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php include "templates/navbar.php";?>
    <?php include "templates/header.php";?>
    <?php require_once "config/functions.php";?>


    <?php 
    $siswa = require "config/data.php";
    ?>

    <main>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Nilai-1</td>
            <td>Nilai-2</td>
            <td>Nilai-3</td>
            <td>Nilai rata rata</td>
            <td>Status</td>
        </tr>
    
    <?php 
        foreach ($siswa as $key => $value) {
        $Nilai = $value["nilai"];
        $rataRata = hitungRataRata($Nilai);
        $kelulusan = cekKelulusan($rataRata);  
    ?>

        <tr>
            <td><?= $key + 1?></td>
            <td><?= $value["name"] ?></td>
            <td><?= $Nilai[0] ?></td>
            <td><?= $Nilai[1] ?></td>
            <td><?= $Nilai[2] ?></td>
            <td><?= $rataRata ?></td>
            <td><?= $kelulusan ?></td>
        </tr>

    <?php } ?>
    </table>
    </main>
    
    <?php include "templates/footer.php";?>
</body>
</html>