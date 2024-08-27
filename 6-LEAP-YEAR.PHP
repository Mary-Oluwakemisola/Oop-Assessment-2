<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Year Checker</h1>
    <form method="post" action="">
        <label for="year">Enter a year(Int):</label>
        <input type="number" id="year" name="year" min="1900" required>
        <input type="submit" value="Check">
    </form>

    <?php

                                           // THINGS TO DO TO ACHIEVE LEAP YEAR CHECKER
    // 1.     Function to check if a year is a leap year
    // 2,     If divisible by 100, it must also be divisible by 400
    // 3.     Check if form is submitted
    // 4.     Validate that the input is a valid year
    // 5.     Check if the year is a leap year




    // Function to check if a year is a leap year
    function isLeapYear($year) {
        // Check if the year is divisible by 4
        if ($year % 4 == 0) {
            // If divisible by 100, it must also be divisible by 400
            if ($year % 100 == 0) {
                return $year % 400 == 0;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from form
        $year = intval($_POST['year']);
        
        // Validate that the input is a valid year
        if ($year < 1900) {
            echo "<p>Please enter a valid year greater than or equal to 1900.</p>";
        } else {
            // Check if the year is a leap year
            if (isLeapYear($year)) {
                echo "<p>$year is a leap year!</p>";
            } else {
                echo "<p>$year is not a leap year.</p>";
            }
        }
    }
    ?>
    <br><br>
     <form action="7-back.php" method="get">
        <button type="submit">Go to Next Page</button>
    </form>
</body>
</html>
