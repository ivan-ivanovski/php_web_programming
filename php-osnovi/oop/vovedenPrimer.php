<?php
    // definiranje na klasi po moznost uste na pocetok za polesna organizacija na kod. Inaku vo praktika se defiraat kako posebni

    // primer za klasa Produkt - Product i kako za primer da se odenusa za nekoja prodavnica ili market
    class Product {
        // vo samata klasa uste na pocetok e dobra navika na pocetok da se pisuvaa svojstva ili promenliva
        private string $productName = "undefined"; // privatna promeliva za ime na produkt
        private float $productPrice = 0.0; // privatna promeliva za cena na produkt
        private float $productQty = 0.0; // privatna promeliva za kolicina na produkt

        public function setProductName(string $productName): void
        {
            $this->productName = $productName;
        }
        public function setProductPrice(float $productPrice):void{
            $this->productPrice=$productPrice;
        }

        public function setProductQty(float $productQty):void{
            $this->productQty=$productQty;
        }
        public function calculateTotalPrice(Product $p):float{
            $total = $p->productPrice * $p->productQty;
            return $total;
        }
        public function printProduct(){
            echo "Product: {$this->productName} \n";
            echo "Cena na produkt: {$this->productPrice} den \n";
            echo "Kolicina: {$this->productQty} \n";
        }
    }


    //primer za inicializiranje na objekat od klasa Product i postavuvanja na svojstva

    $product1 = new Product();
    $product1->setProductName("Voda");
    $product1->setProductPrice(24.00);
    $product1->setProductQty(2.0);

    $product2 = new Product();
    $product2->setProductName("Pukanki");
    $product2->setProductPrice(15.00);
    $product2->setProductQty(3.0);

    // primer za smetka izdadena od market;

    $priceTicket=array();

    $total=0.0;

    $priceTicket[] = $product1;

    $priceTicket[] = $product2;

    foreach ($priceTicket as $product){
        $product->printProduct();
        $total+=$product->calculateTotalPrice($product);
    }

    print_r("Total: ".$total." den");