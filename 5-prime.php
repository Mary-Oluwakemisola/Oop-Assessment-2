<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Number Checker</title>
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



    // Function to check if a number is a prime number
    function isPrime($number) {
        // Check for invalid input
        if ($number <= 1) {
            return false;
        }

        // Check divisibility from 2 to the square root of the number
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $userInput = trim($_POST['number']);

        // Validate that input is a number
        if (is_numeric($userInput) && $userInput >= 0) {
            $number = (int)$userInput;

            // Check if the number is a prime
            if (isPrime($number)) {
                echo "<p>$number is a prime number!</p>";
            } else {
                echo "<p>$number is not a prime number.</p>";
            }
        } else {
            echo "<p>Please enter a valid non-negative number.</p>";
        }
    }
    ?>
    <br><br>

<form action="6-LEAP-YEAR.PHP" method="get">
        <button type="submit">Go to Next Page</button>
    </form>
</body>
</html>
