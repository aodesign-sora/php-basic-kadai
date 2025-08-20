<?php
// Foodクラス
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティの値を出力するメソッド
    public function show_price() {
        return $this->price;
    }
}

// Animalクラス
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティの値を出力するメソッド
    public function show_height() {
        return $this->height;
    }
}

// ======================
// インスタンス作成
// ======================
$food = new Food("poteto", 250);
$animal = new Animal("dog", 60, 5000);

// ======================
// インスタンスの出力（print_r）
// ======================

print_r($food);
echo '<br>';

print_r($animal);
echo '<br>';

// ======================
// メソッド呼び出し
// ======================
echo $food->show_price().'<br>';
echo $animal->show_height();
