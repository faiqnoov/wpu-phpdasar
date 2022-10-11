<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan Array</title>
  <style>
    .kotak {
      width: 30px;
      height: 30px;
      background-color: #BADA55;
      text-align: center;
      line-height: 30px;
      margin: 3px;
      float: left;
      transition: 0.5s;
    }
    .kotak:hover {
      transform: rotate(360deg);
      border-radius: 50%;
    }
    .clear {
      clear: both;
    }
  </style>
</head>

<body>

<?php 
  $numbers = [[1,2,3],[4,5,6],[7,8,9]];
?>

<?php foreach($numbers as $number) : ?>
  <?php foreach($number as $num) : ?>
    <div class="kotak"><?= $num; ?></div>
  <?php endforeach; ?>
  <div class="clear"></div>
<?php endforeach; ?>


  
</body>
</html>