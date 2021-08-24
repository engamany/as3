<?php
if(isset($_GET['submit']))
{
   $result= calc($_GET['num1'],$_GET['num2'],$_GET['opr']);
   header("location:userName.php?result=$result");
   
}
else
{
    header("location:userName.php");
}



function calc(int|float $x,int|float $y,string $opr) :int|float{
    return $opr($x,$y);

}
function add(int|float $x,int|float $y) :int|float{
    return $x+$y;
}
function sub(int|float $x,int|float $y) :int|float{
    return $x-$y;
}
function div(int|float $x,int|float $y) :int|float{
    return $x/$y;
}
function multi(int|float $x,int|float $y) :int|float{
    return $x*$y;
}
?>