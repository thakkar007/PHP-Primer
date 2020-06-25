<?php
$title = "String Manipulation";
include 'includes/header.php' ?>
    <h1>Arrays and Printouts</h1>
    <?php
    //Concatenation
        $phrase1="Student who came late";
        $phrase2="In class, stand with Rock";
        echo $phrase1 .  " " . $phrase2;
        
    //Uppercase
        $name= 'karan thakkar';
        echo '<p>'.ucfirst($name).'</p>';
        echo '<p>'.ucwords($name).'</p>';
        echo '<p>'.strtoupper($name).'</p>';
        echo '<p>'.strtolower("HELLO I WAS UPPER").'</p>';
    ?>

<?php require 'includes/footer.php' ?>