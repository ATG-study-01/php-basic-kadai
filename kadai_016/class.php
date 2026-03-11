<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>PHP基礎編|課題</title>
</head>
<body>
 <p>
  <?php
  // クラス“Food”を定義
  class Food {
   // プロパティを定義
   private $name;
   private $price;
  // 価格を出力するメソッドを定義
  public function show_price(int $price) {
   echo $this->price . '<br>';
  }
  // コンストラクタを作成
  public function __construct(string $name, int $price) {
   $this->name = $name;
   $this->price = $price;
  }
  }
  // インスタンス化
  $foodA = new Food('potato', 250);

  // クラス“Animal”を定義
  class Animal {
   // プロパティを定義
   private $name;
   private $height;
   private $weight;
  // 可愛いワンちゃんの身長を出力するメソッドを定義
  public function show_height(int $height) {
   echo $this->height . '<br>';
  }
  // コンストラクタを作成
  public function __construct(string $name, int $height, int $weight) {
   $this->name = $name;
   $this->height = $height;
   $this->weight = $weight;
  }
  }
  // インスタンス化
  $animalA = new Animal('dog', 60, 5000);

  // 出力
  print_r($foodA);
  echo '<br>';
  print_r($animalA);
  echo '<br>';
  $foodA->show_price(250);
  $animalA->show_height(60);
  ?>
 </p>
</body>
</html>