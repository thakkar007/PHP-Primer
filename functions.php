<?php 
$title = "Functions";
 include 'includes/header.php' ?>
<h1>Functions</h1>
    <?php
    /* Defining a function */
    function writeMessage(){
        echo "Hello nice person<br/>";
    }

    /* Calling a funcion */
    writeMessage();
    
    /* Function return product */

    function returnprod($num1,$num2){
        $prod=$num1*$num2;
        return $prod;
    }
    /* Function with parameter */

    function addFunction($num1,$num2){
        $sum=$num1+$num2;
        echo "The sum of $num1 and $num2 is $sum <br/>";
    }

/*Call Functions */
    addFunction(10,20);
    
    $retvalue=returnprod(10,20);
    echo $retvalue.'<br/>'
    ?>

<?php require 'includes/footer.php' ?>