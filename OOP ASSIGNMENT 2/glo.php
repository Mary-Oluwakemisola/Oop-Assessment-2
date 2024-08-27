<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Prime Number Checker</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

<?php
                                       // THINGS TO DO TO ACHIEVE PRIME NUMBER CHECKER CHECKER
    // 1. Function to check if a number is a prime number
    // 2. Check for invalid input
    // 3. Check divisibility from 2 to the square root of the number
    // 4. Check if form is submitted
    // 5. Validate that input is a number
    // 6. Check if the number is a prime number


    function isPrime($number){
        if($number <= 1){
            return false;
        }

        for($i = 2; $i <= sqrt($number); $i++){
            if($number % $i == 0){
                return false;
            }
        }
        return true;
    }

    









?>
</body>
</html>