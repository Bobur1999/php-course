<?php

    include 'MyClass.php';

class Student extends Person 
{
    public $group;
    public $univer;

    public function getGroupUniver()
    {
        return $this->univer.'::'.$this->group;
    }

    public function getFullName()
    {
        $this->first_name .= 'bek';
        
        return parent::getFullName();
        // return $this->first_name; 
    }
}

$student_1 = new Student();
$student_1->first_name = "Oybek";
$student_1->last_name = 'Kadirov';
$student_1->univer = "TUITUB";
$student_1->group = '914-13';

echo $student_1->getFullName();
echo "<BR>";
echo $student_1->getGroupUniver();