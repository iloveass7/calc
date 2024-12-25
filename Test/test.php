<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = htmlspecialchars($_REQUEST["first_name"]); 
        $lname = htmlspecialchars($_REQUEST["last_name"]); 
        $pet = htmlspecialchars($_REQUEST["favorite_pet"]); 
        echo $fname;
        echo "<br>";
        echo $lname;
        echo "<br>";
        echo $pet;
        echo "<br>";
    }else{
        echo "Fuck off";
        header("Location: ../form.php");
    }