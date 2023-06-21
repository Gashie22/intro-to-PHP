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
    <h1>Results of Calculations</h1>
    <h3><?php echo "the sum is : $sum" ?></h3>
    <h3><?php echo "the product is : $product" ?></h3>
    <h3><?php echo "the exponential is : $power" ?></h3>
</body>
</html>