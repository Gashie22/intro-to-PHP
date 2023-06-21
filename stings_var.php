<?php
//variables 
$age=21;
$name='Gashie';

//constants
define ('SURNAME','Maso');

//strings and string concat
echo $name .SURNAME ;
echo "MY OTHER NAME : $name";
echo'hello my name is '.$name ;// the diff between single and double quotes
//string functions
echo nl2br(' ');
$first_char= $name[0];
echo $first_char;

$str_len=strlen($name);
$uppercase1=strtoupper($name);

$replace=str_replace('e','y',$name);


?>

<?php
$num1=10;
$num2=25;

$sum=$num1+$num2;
$product=$num1*$num2;
$power=$num1**$num2;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo'hello my name is '.$name ?></div>
    <div><?php echo "MY OTHER NAME : $name" ?></div>
    <div><?php echo'I am '.$age .'years old' ?></div>
    <div><?php echo'Last name : '.SURNAME  ?></div>
    <div><?php echo $str_len  ?></div>
    <div><?php echo $uppercase1  ?></div>
    <div><?php echo $replace  ?></div>
    <br>
    <h1>Results of Calculations</h1>
    <h3><?php echo "the sum is : $sum" ?></h3>
    <h3><?php echo "the product is : $product" ?></h3>
    <h3><?php echo "the exponential is : $power" ?></h3>


</body>
</html>