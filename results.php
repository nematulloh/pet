<?php
include ('pet.php');
include ('tortoise.php');
include ('dog.php');
include ('cat.php');
$anima=$_GET['animal'];
$pet=array();
$pet[]=new Pet('bobik',2,'dog');
$pet[]=new Pet('belka',1,'cat');
$pet[]=new Pet('angel',56,'cat');
$pet[]=new Pet('cherepaxa',53,'tortoise');
$pet[]=new Pet('belka',6,'cat');
$pet[]=new Pet('bagira',1,'dog');
$pet[]=new Pet('sammy',4,'tortoise');
$pet[]=new Pet('fread',5,'dog');
$pet[]=new Pet('jonny',45,'tortoise');
echo '<h2>sort for date and category</h2>';
$sortdate = usort($pet, function($a,$b)
{
    return $a->getdate()<$b->getdate()? 1 : -1;});

foreach ($pet as $animal)
{
    if ($animal->animaa($anima)==true)
    {
        $animal->full();
    }
    if (empty($anima))
    {
        echo 'Name:'.$animal->getname().'<br>';
        echo 'Age:'.$animal->getage().'<br>';
        echo 'Data_create:'.$animal->getdate().'<br>';
        echo 'type: '.$animal->gettype().'<br>';
        echo '<hr>';
    }
}
$sort = usort($pet, function($a,$b)
{
    return strcmp($a->getname(),$b->getname());
});

echo '<h2>sort for name</h2>';
foreach ($pet as $all)
{
    echo 'Name:'.$all->getname().'<br>';
    echo 'Age:'.$all->getage().'<br>';
    echo 'Type:'.$all->gettype().'<br>';
    echo 'Data_create:'.$all->getdate().'<br><hr>';
}