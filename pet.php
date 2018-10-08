<?php
/**
 * Created by PhpStorm.
 * User: Nematulloh
 * Date: 25.08.2018
 * Time: 22:38
 */
class Pet
{
    protected $name;
    protected $age;
    protected $type;
    protected $date_create;

    public function __construct(string $name,int $age,string $type)
    {
        $this->name=$name;
        $this->age=$age;
        $this->type=$type;
        $this->date_create=date("y-m-d H:i:s");

    }
    public function getname(){
        return $this->name;
    }
    public function getage(){
        return $this->age;
    }
    public function getdate(){
        return $this->date_create;
    }
    public function gettype(){
        return $this->type;
    }
    public function full()
    {
        echo 'Name:'.$this->getname().'<br>';
        echo 'Age:'.$this->getage().'<br>';
        echo 'Data_create:'.$this->getdate().'<br>';
        echo 'type: '.$this->gettype().'<br>';
        echo '<hr>';

    }
    public function animaa(string $n){
        if ($this->type==$n){
            return true;
        }
        else{
            return false;
        }
    }
}
