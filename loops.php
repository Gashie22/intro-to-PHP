<?php
//loop 1-5
for ($i=0;$i<5;$i++){
    echo $i. "<br/>";
}
//while loop
while($i<5){
    echo $i;
    $i++;
}
//array loop
$animals=array('cat','dog','mouse');
for ($i=0;$i<count($animals);$i++){
    echo $animals[$i]. "<br/>";
}

//alternative way
foreach($animals as animal){
    echo $animal. "<br/>";

}
//Multi dimension array
$items=[
    ['name'=>'beans','price'=>20],
    ['name'=>'mango','price'=>10],
    ['name'=>'peas','price'=>15]

];
//outputs each item and its price , thn br adds a new line
foreach($items as $item){
    print_r ($item['name'].'- '.$item['price'] .'<br/>');
 }
?>
<?php
//while loop
$i=0;
while($i<5){
    echo $i.'<br/>';
    $i++;
}
$items=[
    ['name'=>'beans','price'=>20],
    ['name'=>'mango','price'=>10],
    ['name'=>'peas','price'=>15]

];
 foreach($items as $item){
    //conditionn
    if ($item['price']<20){
    print_r ($item['name'].'- '.$item['price'] .'<br/>');


    }
 }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <!--Looping in HTML -->
    <div class="loops">
        <ul>
    <!--Do not close the foreach loop keep it open { -->
            <?php foreach($items as $item){ ?> 

                <h3><?php print_r($item['name']) ?> </h3>
                <p>$<?php print_r($item['price']) ?></p>
            <?php } ?> <!-- Close the loop-->
            </ul>

<h1>Budget Price</h1>
        <ul>
            <?php foreach($items as $item){ ?> 
                <?php if($item['price']<20){ ?>
                    <h3><?php print_r($item['name']) ?> </h3>
                    <p>$<?php print_r($item['price']) ?></p>
                    <?php } ?> <!-- Close the loop-->
                    <?php } ?> <!-- Close the loop-->
                
        </ul>
    </div>




</body>
</html>
