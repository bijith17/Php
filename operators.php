<?php

// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators
// String operators
// Array operators
// Conditional assignment operators


/*arithamatic operators*/

 $a=19;            
 $b=20;
 echo($a+$b);                                  //addition
 echo"<br>";

 echo($a-$b);                                  //substraction
 echo"<br>";

 echo($a*$b);            //multiplicaton
 echo"<br>";

 echo($a/$b);              //division
 echo"<br>";

 echo($a%$b);               //modulus
 echo"<br>";

 /*assignment operators*/

 $c=20;                         //assignment addition
 $c+=10;
 echo($c);
 echo"<br>";

 $c-=12;                         //assignment substraction
 echo($c);
 echo"<br>";

 $c*=11;                  //assignment multiplication
 echo($c);
 echo"<br>";

 $c/=14;                     //assignment division
 echo($c);
 echo"<br>";

 $c%=15;                       //assignment modulus
 echo($c);
 echo"<br>";

 /*comparison operator*/

 $e=10;                    
 $f="21";
 $g=11;
 var_dump($e==$f);                    //equal to
 echo"<br>";
  
 var_dump($e!=$g);              //not equal to
 echo"<br>";

 var_dump($e===$f);              //identical
 echo"<br>";

 var_dump($e!==$f);               //not identical
 echo"<br>";

 var_dump($e>$g);                   //greaterthan
 echo"<br>";

 var_dump($e<$g);                          //lessthan
 echo"<br>";

 var_dump($e>=$g);                      //greaterthan or equal to
 echo"<br>";

 var_dump($e<=$g);                  //lessthan or equal to 
 echo"<br>";


 /*increment or decrement operator*/

 $h=10;                           //pre increment
 echo ++$h;
 echo"<br>";

 echo $h++;                      //post increment
 echo"<br>";

 echo --$h;                         //pre dncrement
 echo"<br>";

 echo $h--;                            //post decrement
 echo"<br>";

 /*logical operators*/

 $i=10;
 $j=20;
  if($i==10 && $j==20)                    // and operter
{
    echo "true". "<br>";
} 
else
echo"false"; 
echo"<br>";

if($i==10 || $j==20)              //or operator
{
    echo" the function true" ."<br>";
}
else
echo "false";
echo"<br>";

if($i!==20)                           //not operator
echo $i;
echo"<br>";

if($i==10 ^ $j==20)                 //xor operator
echo "some true";
echo"<br>";
   
/*string operators*/

$one="hello";                    //concatination 
$two="world";
echo $one . $two;
echo"<br>";

$one.=$two;                        //concatination assignment
echo $one;
 ?>
