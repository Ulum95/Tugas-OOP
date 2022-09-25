<?php

class Product
{

  public $name = "Lego",
    $price = 5000,
    $discount;
  public function getPrice()
  {
  }
  public function setPrice()
  {
    return $this->price;
  }
  public function getName()
  {
  }
  public function setName()
  {
    return $this->name;
  }
  public function getDiscount()
  {
  }
  public function setDiscount()
  {
    return $this->discount;
  }
}

// Inheritance
class CDMusic extends Product
{
  public $artist = "kevin",
    $genre = "Blood Moon";

  public function setArtist()
  {
    return "Artist = " . $this->artist;
  }

  public function setGenre()
  {
    return "Genre = " . $this->genre;
  }

  public function setName()
  {
    return "Name = " . $this->name;
  }
  public function setPrice()
  {
    return "Price + 10% = Rp " . $this->price + $this->price * 0.1;
  }
  public function setDiscount()
  {
    return "Discount 5% = Rp " . $this->price * 0.05;
  }
  public function total()
  {
    return "Total Price = Rp " . $this->price + $this->price * 0.1 - $this->price * 0.05;
  }
}
echo "CDMusic </br>";
$produk = new CDMusic();
echo $produk->setName() . "</br>";
echo $produk->setArtist() . "</br>";
echo $produk->setGenre() . "</br>";
echo $produk->setPrice() . "</br>";
echo $produk->setDiscount() . "</br>";
echo $produk->total() . "</br>";
echo "</br>";

class CDRack extends Product
{
  public $capacity = "10 box",
    $model = "Blue";

  public function setCapacity()
  {
    return "Capacity = " . $this->capacity;
  }

  public function setModel()
  {
    return "Model = " . $this->model;
  }

  public function setName()
  {
    return "Name = " . $this->name;
  }
  public function setPrice()
  {
    return "Price + 15% = Rp " . $this->price + $this->price * 0.15;
  }
  public function setDiscount()
  {
    return "Discount 0% " . $this->discount;
  }
  public function total()
  {
    return "Total Price = Rp " . $this->price + $this->price * 0.15 - $this->discount;
  }
}
echo "CDRack </br>";
$produk = new CDRack();
echo $produk->setName() . "</br>";
echo $produk->setCapacity() . "</br>";
echo $produk->setModel() . "</br>";
echo $produk->setPrice() . "</br>";
echo $produk->setDiscount() . "</br>";
echo $produk->total() . "</br>";
