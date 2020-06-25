<?php
$title = "Home";
include 'includes/header.php' ?>
    <!--Basic HTML-->

    <h1>Hello HTML - PHP Primer</h1>

    <?php 
    echo 'hello';
    echo '<br/>';
    echo 'Second Line';
    echo '<br/>';

    //declare variable
    $name = 'Karan Thakkar';
    $age = '21';

    //echo variable
    echo $name;
    echo '<h1>My name is:'.$name.'</h1>';
    echo '<h1>My age is:'.$age.'</h1>';

    //echo using double quotes and interpretation
    echo "<h1>My name is:$name</h1>";
?>
<button type="button" class="btn btn-dark">Click Me!</button>
<?php require 'includes/footer.php' ?>