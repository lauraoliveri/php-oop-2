<?php


class Product {

   public $name;
   public $category;
   public $price;
   public $img;


    // Settare categoria
   public function setCategory($category) {
        if ( is_string($category)
            && 
            ($category == 'Cane'
                || 
            $category == 'Gatto')) {

            $this->category =  $category;
        }
    }

    public function __construct(string $name, string $category, float $price, string $img) {
        $this->name = $name;
        $this->setCategory($category);
        $this->price = $price;
        $this->img = $img;
    }
}

// Uso il trait per aggiungere il brand a tutte le classi
trait Brand {
    public string $brand;

}


// Cibo
class Food extends Product {
    public $ingredients;
    use Brand;

    public function __construct($name, $category, $price, $img, $ingredients, $brand) {
        parent::__construct($name, $category, $price, $img);
        $this->ingredients = $ingredients;
        $this->brand = $brand;
    }
}

// Giochi
class Toy extends Product {
    public $materials;
    public $colors;
    use Brand;

    public function __construct($name, $category, $price, $img, $materials, $colors,  $brand) {
        parent::__construct($name, $category, $price, $img);
        $this->materials = $materials;
        $this->colors = $colors;
        $this->brand = $brand;
    }
}

// Cucce
class Bed extends Product {
    public $materials;
    public $size;
    use Brand;

    public function __construct($name, $category, $price, $img, $materials, $size,  $brand) {
        parent::__construct($name, $category, $price, $img);
        $this->materials = $materials;
        $this->size = $size;
        $this->brand = $brand;
    }
}

$Bacchetta = new Toy ("Bacchetta con pendente farfalla", "Gatto", 4.90, "https://croci.net/cdn/shop/files/Gioco_per_gatti_Provence-1.jpg?v=1696857777&width=2048", "plastica, gomma", "bianco, arancione", "Catslove");
$CuteBed = new Bed  ("Cuccia rosa carina", "Cane", 13.90, "https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR8bG2EVewvep1xTMUnXCYxQJFm8SNRUYvAgdqqNL8MIr2RdiVDEDoFVL7beqQc57Go9YbvzzQUCucCg4o3SSqk_-bv-zXshbnBPzswcnc3", "plastica, cotone", 15, "Doglife");
?>
