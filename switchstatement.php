<?php
$title = "Switch Statement";
include 'includes/header.php' ?>
    <h1>Switch Statement</h1>

    <?php
    $grade='D';

    switch($grade){
        case 'A':
            echo '<h2 style="color:red">You are a superstar</h2>';
        break;
        case 'B':
            echo '<h2 style="color:yellow">You are not less superstar</h2>';
        break;
        case 'C':
            echo '<h2 style="color:blue">Nice try</h2>';
        break;
        default:
            echo '<h2 style="color:Pink">You are a superstar</h2>';
        break;
    }

    ?>

<?php require 'includes/footer.php' ?>