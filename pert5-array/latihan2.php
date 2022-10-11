<?php
/* cara sebelumnya merupakan cara untuk menampilkan
array bagi programmer, sedangkan kalau untuk
user gunakan cara pengulangan pada array */

// Pengulangan pada array
// for / foreach
$numbers = [1,3,33,21,5,42,4,9]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        /* untuk membersihkan float-nya */
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!--for  -->
    <?php for($i = 0; $i < count($numbers); $i++) { ?>
        <div class="kotak"><?php echo $numbers[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- foreach -->
    <?php foreach($numbers as $number) { ?>
        <div class="kotak"><?php echo $number; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- foreach dgn gaya penulisan templating -->
    <?php foreach($numbers as $number) : ?>
        <div class="kotak"><?php echo $number; ?></div>
    <?php endforeach; ?>




    
</body>
</html>