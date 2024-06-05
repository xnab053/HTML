<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "<//pre>";
}

// 學生資料表
// 1.amy 0911-111-111
// 2.bob 0922-222-222
// 3.cat 0933-333-333


class Student
{
    public $name;
    public $mobile;
    public $num;


    // public function __construct()
    // {
    //     echo "object 誕生";
    // }

    public function __construct($name)
    {
        echo "Hi $name ~ object 誕生";
    }


    public function intro()
    {
        $result = "Hi , I'm $this->num $this->name - $this->mobile";
        echo "$result <br>";
    }
}

$s1 = new Student('kai');
// $s1->name = 'amy';
$s1->mobile = '0911-111-111';
$s1->num = 1;
dd($s1);
$s1->intro();

$s2 = new Student('zoo');
// $s2->name = 'bob';
$s2->mobile = '0922-222-222';
$s2->num = 2;
dd($s2);
$s2->intro();