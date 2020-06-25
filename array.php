<?php
$title = "Arrays";
include 'includes/header.php' ?>

<h1>Arrays and Printouts</h1>

<?php
    //a variable
    $num=3;

    //an array
    //Same Datatype
    $numbers=array(1,2,3,4,5,6,7,8,9,10);

    echo $numbers[5];
    $size = count($numbers);
    echo '<p>$numbers[9]</p>';
    echo '<p>count of numbers is '.count($numbers).'</p>';
    echo "<p>count of numbers is $size </p>";

?>

<?php require 'includes/footer.php' ?>