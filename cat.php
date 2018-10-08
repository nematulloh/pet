<?php
/**
 * Created by PhpStorm.
 * User: Nematulloh
 * Date: 25.08.2018
 * Time: 22:48
 */
class Cat extends Pet
{
public function __construct($name, $age)
{
    parent::__construct($name, $age);
    $this->type="cat";
}
}
