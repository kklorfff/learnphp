<?php

class Box {
   public $width;
   protected $height;
   private $length;

   public function volume(){
        return $this->width * $this-> height * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'Metal';
    public $weightPerUnit = 2;

    public function test (){
        var_dump($this->length);
    }

    public function mass() {
        return $this->volume() * $this->weightPerUnit;
    }
}

$metalBox1 = new MetalBox();
$metalBox1->width = 'a lot';
// $metalBox1->test();
$metalBox1->height = 20;
$metalBox1->length = 30;

var_dump($metalBox1->volume());
var_dump($metalBox1);
