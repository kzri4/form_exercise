<?php

class Person
{

    private $familyName; // 姓
    private $firstName;  // 名

    public function __construct($familyName, $firstName)
    {
        $this->familyName = $familyName;
        $this->firstName = $firstName;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function selfIntroduction()
    {
        echo '私の名前は' . $this->getFamilyName() . ' '  . $this->getFirstName() . 'です<br>';
    }
}



class Employee extends Person
{
     private $department; // 所属する部署

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }

}

$taro = new Employee('田中', '太郎');

$taro->setDepartment('教育事業部');
echo $taro->getDepartment(); // 教育事業部