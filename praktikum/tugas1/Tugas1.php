<?php 
// Imam Faraz Aditya
// 203040066
// Jumat 10.00 - 11.00
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 203040066</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 2px solid black;
        }
        .biru{
            background-color: lightblue;
        }
        .salmon{
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ($kolom=1; $kolom<=6; $kolom++) : 
        for ($baris=1; $baris<=6; $baris++) : 

            if($kolom%2==!0) :
                if($baris%2==!0) : ?>
                    <div class="kotak biru"></div>
                <?php else: ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>

            <?php else: 
                if($baris%2==!0) : ?>
                    <div class="kotak salmon"></div>
                <?php else: ?>
                    <div class="kotak biru"></div>
                <?php endif; ?>    
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    <!-- 066 -->
</body>
</html>

