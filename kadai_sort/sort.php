<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>PHP基礎編</title>
</head>

<body>
 <p>
  <?php
  $num = [15, 4, 18, 23, 10];
  sort($num);
   echo '昇順にソートします。<br>';
   foreach ($num as $val) {
    echo "$val <br>";
   }
  rsort($num);
   echo '降順にソートします。<br>';
   foreach ($num as $val) {
    echo "$val <br>";
   }
  ?>
 </p> 
</body>
</html>