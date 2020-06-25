<?php
$title = "If Else Statement";
include 'includes/header.php' ?>
    <h1>If Else Statement</h1>

    <?php
         
         $grade=44;
    //===,==,<,>,<=,>=
    if($grade >= 50){
        echo '<h3 style="color:red">You have passed</h3>';
    }
    else{
        echo '<h3 style="color:green">You have failed</h3>';        
    }

        $grade='A';
    ?>

<?php require 'includes/footer.php' ?>