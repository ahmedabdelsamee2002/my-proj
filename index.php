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

  public static function calculateTotalPrice($products) {
    $totalPrice = 0;
    foreach ($products as $product) {
      $totalPrice += $product->price;
    }
    return $totalPrice;
  }

  public function displayInfo() {
    echo "ID: " . $this->id . "<br>";
    echo "Name: " . $this->name . "<br>";
    echo "Price: " . $this->price . "<br>";
  }
}

$product1 = new Product(1, "Product 1", 100);
$product2 = new Product(2, "Product 2", 50);
$product3 = new Product(3, "Product 3", 200);
$product4 = new Product(4, "Product 4", 150);
$product5 = new Product(5, "Product 5", 75);
$product6 = new Product(6, "Product 6", 20);
$product7 = new Product(7, "Product 7", 90);
$product8 = new Product(8, "Product 8", 115);

$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8];

$totalPrice = Product::calculateTotalPrice($products);
echo "Total Price: " . $totalPrice . "<br>";

foreach ($products as $product) {
  $product->displayInfo();
  echo "<br>";
}

$numberOfProducts = count($products);
echo "Number of Products: " . $numberOfProducts;

?>


