<?php

Class TestClass
{
    protected static $VAR_1 = 100;

    public static function getVar()
    {
        return self::$VAR_1+2;
    }
}
echo TestClass::$VAR_1;
echo '<br>';
echo TestClass::getVar();