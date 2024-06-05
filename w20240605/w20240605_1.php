<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

class Fruit{
    public $name;
    public $color;

    public function intro(){
        $nowName = $this->name;
        $nowColor = $this->color;
        $introText = "Hi , I'm $nowName - color $nowColor";
        echo "$introText <br>";
    }

    public function sell($data){
        $nowName = $this->name;
        $nowColor = $this->color;
        $result = "$nowName - $nowColor - $data";
        echo "$result <br>";
    }
}

$apple = new Fruit();
$apple -> name = 'apple';
$apple -> color = 'red';
dd($apple);
$apple -> intro();
$apple -> sell(100);
echo "<br>";

$banana = new Fruit();
$banana -> name = 'banana';
$banana -> color = 'yellow';
dd($banana);
$banana -> intro();
$banana -> sell(100);
echo "<br>";

$grape = new Fruit();
$grape -> name = 'grape';
$grape -> color = 'purple';
dd($grape);
$grape -> intro();
$grape -> sell(100);