<?php
$title = "For Loop";
 include 'includes/header.php' ?>
    <h1>For Loop</h1>
    <?php
    //For Loops
        for($count=0;$count<10;$count++){
            echo '<p>HELLO WORLD</p>';
        }

        for($count=0;$count<10;$count++){
            echo "The Count is: $count";
            echo "<br/>";
        }
    ?>

<?php require 'includes/footer.php' ?>