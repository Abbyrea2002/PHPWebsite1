<?php
  class product{
    public String $name;
    public float $price;
    public String  $description;

    public function __construct(String $name, float $price, String $description){
          $this->name = $name;
          $this->price = $price;
          $this->description = $description;
    }

    public function getName(): string{ return $this->name;}
    public function getPrice(): float{ return $this->price;}
    public function getDescription(): string{ return $this->description;}

  }

  class ProductController extends Controller{
    public function showProduct(){
        $product = new Product("Laptop", 999.99, "High-performance laptop");
        return view('product.show', ['product' => $product]);
    }
  }
?>