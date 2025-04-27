<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>

<body>
   <p>
       <?php
       class Food {
       private $name; 
       private $price;

       // コンストラクタを定義する
       public function __construct(string $name,int $price) {
       $this->name = $name;
       $this->price = $price;
    }

       //メゾット定義
       public function set_name(int $price) {
           $this->price = $price;
    }
       public function show_price() {
       echo $this->price;
    }

}
       //インスタンス化
       $food = new Food('potato', 250);

print_r($food);

class Animal {
       private $name; 
       private $height;
       private $weight;

       // コンストラクタを定義する
       public function __construct(string $name,int $height,int $weight) {
       $this->name = $name;
       $this->height = $height;
       $this->weight = $weight;
     }    

       //メゾット定義
       public function set_name(int $height) {
           $this->height = $height;
    }
       public function show_height() {
       echo $this->height;
     }
}

       //インスタンス化
       $animal = new Animal('dog',60,5000);
       
       echo "<br>";
       print_r($animal);
       echo "<br>";
       $food->show_price();
       echo "<br>";
       $animal->show_height();
       ?>
   </p>
</body>

</html>          