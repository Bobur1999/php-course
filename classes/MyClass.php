<?php

class Person
{
    /**
     * Property va Method bo'lishi mumkin:
     * public
     * protected
     * private
     */
    public $first_name;
    public $last_name;

    public function getFullName()
    {
        return $this->first_name.' '.$this->last_name; 
    }

}
    //Class'dan object (ekzamplyar) yaratish
    $ravshan = new Person();
    //Property'larga qiymat qo'yish
    $ravshan->first_name = "Ravshan";
    $ravshan->last_name = "Samandarov";
    //Method'ga murojaat qilish bu yerda getFullName() method
    // echo $ravshan->getFullName();
