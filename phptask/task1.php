<?php

class Product {
  
  public $id;
  public $name;
  public $price;

  
  public function __construct($id, $name, $price) {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }

  
  public function display_info() {
    echo "Product ID: " . $this->id . "\n";
    echo "Product Name: " . $this->name . "\n";
    echo "Product Price: " . $this->price . "\n";
  }
}

$products = array();


for ($i = 0; $i < 8; $i++) {
  
  $id = rand(1, 100);
  $name = "Product " . $id;
  $price = rand(10, 100);

  
  $product = new Product($id, $name, $price);

  
  $products[] = $product;
}


$total_price = 0;


foreach ($products as $product) {
  $total_price += $product->price;
}

echo "Total Price: " . $total_price . "\n";

echo "Number of Products: " . count($products) . "\n";


foreach ($products as $product) {
  $product->display_info();
}
?>