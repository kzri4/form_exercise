<?php

class User
{
    private $name;
    private $age;

    // コンストラクタ
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function selfIntroduction()
    {
        echo '私の名前は' . $this->name . 'です。今年で' . $this->age . '歳になります<br>';
    }
}

$bob = new User('bob', 22);
// ここでtomを設定すると、nameがtomに変更されてしまう
$bob->name = 'tom';

echo $bob->age; // Fatal error: Cannot access private property User::$age

$bob->selfIntroduction();