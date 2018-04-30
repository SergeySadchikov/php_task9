<?php 
class Car 
{
    public $color;
    public $type;
    public $transmission;
    public $wheelsize;
    public function __construct($type, $color, $transmission, $wheelsize) 
        {
        $this->type = $type;
        $this->color = $color;
        $this->transmission = $transmission;
        $this->wheelsize = $wheelsize;
        }
    public function improveEquipment() 
    {
        return $this->transmission = 'AT';
        return $this->wheelsize = 19;
    }
    public function changeType($type) 
    {
        $this->type = $type;
    }
}

$car1 = new Car('sedan', 'white', 'MT', 15);
$car1->improveEquipment();
$car2 = new Car('sedan', 'white', 'MT', 15);
$car2->improveEquipment();
$car2->changeType('hatchback');

class Tv 
{
    private $name;
    public $color;
    private $tecnology;
    public $screenSize;
    public $discount;
    public function __construct($name, $tecnology, $screenSize)
    {
        $this->name = $name;
        $this->color = $color = 'black';
        $this->tecnology = $tecnology;
        $this->screenSize = $screenSize;
    }
    public function changeColor($color)
    {
        $this->color = $color;
    }
    public function changeSize($screenSize)
    {
        $this->screenSize = $screenSize;
    }
    public function getDiscount()
    {
        if ($this->color == 'white') {
            return $this->discount = 0.3;
        }
    }
}

$tv1 = new Tv('LG', 'LCD', 32);
$tv1->changeSize(42);
$tv2 = new Tv('Samsung', 'LED', 42);
$tv2->changeColor('white');
$tv2->getDiscount();

class Pen
{
    private $brand;
    public $paintColor = 'blue';
    public $inkThickness;
    public $cap = true;
    public $button = false;
    public function __construct($brand, $inkThickness)
    {
        $this->brand = $brand;
        $this->inkThickness = $inkThickness;
    }
    public function changePaint($paintColor)
    {
        $this->paintColor = $paintColor;
    }
    public function changeCap()
    {
        if ($this->cap == false) {
            return $this->button = true;
        }
    }
}

$pen1 = new Pen('Parker', 0.03);
$pen1->changePaint ('black');
$pen2 = new Pen('KOH-I-NOOR', 0.08);
$pen2->changeCap();


class Duck 
{
    private $age;
    private $gender;
    private $genus;
    private $areal;
    public function __construct($gender, $age, $genus)
    {
        $this->gender = $gender;
        $this->age = $age;
        $this->genus = $genus;
    }
    public function getAreal()
    {
        switch ($this->genus) {
            case 'Anatinae':
                $this->areal = 'South America';
                break;
            case 'Dendrocygninae':
                $this->areal = 'Asia';
                break;
            case 'Stictonettinae':
                $this->areal = 'Australia'; 
                break;
            case 'Tadorninae':
                $this->areal = 'Africa'; 
                break; 
        }    
    }
}

$duck1 = new Duck('male', 2, 'Anatinae');
$duck1->getAreal();
$duck2 = new Duck('female', 1, 'Tadorninae');
$duck2->getAreal();

class Goods
{
    private $name;
    private $price;
    private $wasMade;
    public $quality;
    private $height;
    public function __construct($name, $price, $wasMade, $height)
    {
        $this->name = $name;
        $this->price = $price;
        $this->wasMade = $wasMade;
        $this->height = $height;
    }
    public function checkQuality()
    {
        if ($this->wasMade == 'China') {
            return $this->quality = 'bad';
        } else {
            return $this->quality = 'normal';
        }
    }
    public function checkDelivery()
    {
        if ($this->height > 3000) {
            echo "Do you need delivery? ";
        }
    }
}

$goods1 = new Goods('tv', 1000, 'China', 1000);
$goods1->checkQuality();
$goods2 = new Goods('refregerator', 3000, 'US', 3500);
$goods2->checkDelivery();
 ?>