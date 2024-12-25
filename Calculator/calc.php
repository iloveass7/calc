<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_INT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_INT);
        $operator = htmlspecialchars($_POST["operator"]);
    }

    $errors = false;

    if(empty($num1) || empty($num2) || empty($operator)){
        $erros = true;
        echo "Why did u leave shit empty?";
    }

    if(!is_numeric($num1) || !is_numeric($num2)){
        echo "Why are you trying to be clever u dipshit?";
        $errors = true;
    }

    if($num1<0 || $num2<0){
        echo "Whats up with you and negative values?";
        $errors=true;
    }


    $result = 0;
    if(!$errors){
        if($operator==="add"){
            $result=$num1+$num2;
        }else if($operator==="subtraction"){
            if($num1>$num2){
                $result=$num1-$num2;
            }else{
                $result=$num2-$num1;
            }
        }else if($operator==="multiplication"){
            $result = $num1 * $num2;
        }else if($operator==="division"){
            if($num1>$num2){
                $result=$num1/$num2;
            }else{
                $result=$num2/$num1;
            }
        }else if($operator==="modulus"){
            if($num1>$num2){
                $result=$num1%$num2;
            }else{
                $result=$num2%$num1;
            }
        }else{
            echo "Something went wrong sawwrry.";
        }
    }

    echo '<div id="result-box"><p>Your result is ' . $result . '</p></div>';
