<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

class Animal{
    public $name;
    public $color;
    public $kg;

    public function intro(){
        $result = "Hi , I'm $this->name - $this->color - $this->kg ";
        echo "$result <br>";
    }
}

$cat = new Animal();
$cat->name = 'cat';
$cat->color = 'black';
$cat->kg = 4;
dd($cat);
$cat->intro();

$rabbit = new Animal();
$rabbit->name = 'rabbit';
$rabbit->color = 'white';
$rabbit->kg = 5;
dd($rabbit);
$rabbit->intro();