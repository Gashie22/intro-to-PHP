<?php
//indexed arrays
$body_parts=['hand','leg','mouth','ear'];
$element1=$body_parts[0];
//alternative way
$animals=array('cat','dog','mouse');
$first_element=$animals[0];
//modification
$animals[2]='zebra';
$animals[]='giraffe'; //adding an element
echo $animals;

print_r($body_parts);//alt way of printing

//array operations
$body_parts2=array_push($body_parts,'tongue');
$contents=count($animals);
$combined=array_merge($animals,$body_parts);

//associative arrays [value pairs]
$people=['Gashie'=>22,
          'Courage'=>11,
          'Tino' => 15]

//access
echo $people['Gashie'];  

//Multi dimension array
$items=[
    ['name'=>'beans','price'=>20],
    ['name'=>'mango','price'=>10],
    ['name'=>'peas','price'=>15]

]
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4><?php echo $animals ?></h4>
    <h4><?php echo $body_parts ?></h4>
    <h4><?php echo $body_parts2 ?></h4>
    <h4><?php echo $contents ?></h4>
    <h4><?php echo $combined ?></h4>
</body>
</html>
