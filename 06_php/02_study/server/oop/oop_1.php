<?php

// Userクラスの宣言
class User
{
    public $name = 'Bob';
    public $age = 21;

}

$user =  new User();

$user->name = 'tom';
echo $user->name;