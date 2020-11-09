<?php

class User
{
          // プロパティ宣言だけに変更
    public $name;
    public $age;

         // コンストラクタ
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function greet($to){
        echo 'こんにちは' . $to . 'さん<br>';
    }

    public function selfIntroduction(){
        echo '私の名前は' . $this->name . 'です。今年で' . $this->age . '歳になります<br>';
    }
}

$bob = new User('bob', 20);
$bob->selfIntroduction();

$tom = new User('tom', 21);
$tom->selfIntroduction();

$ken = new User('ken', 22);
$ken->selfIntroduction();
