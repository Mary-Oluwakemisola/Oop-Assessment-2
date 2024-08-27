<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Checker</title>
</head>
<body>
    <h1>Number Checker</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
                                            
                                             // THINGS TO DO TO ACHIEVE NUMBER CHECKER

// 1.     Function to check if a number is a multiple of 3
// 2.     Check if the number is a multiple of 3
// 3.     Check if form is submitted
// 4.     Get user input from form
// 5.     Validate that the input is a valid number
// 6.     Check the number and display the result





    // Function to check if a number is a multiple of 3
    function checkNumber($number) {
        // Check if the number is a multiple of 3
        if ($number % 3 == 0) {
            return "Your Name";
        } else {
            return "Backend";
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from form
        $number = intval($_POST['number']);
        
        // Validate that the input is a valid number
        if ($number < 0) {
            echo "<p>Please enter a non-negative number.</p>";
        } else {
            // Check the number and display the result
            $result = checkNumber($number);
            echo "<p>$result</p>";
        }
    }
    ?>
    <br><br>
     <form action="index.php" method="get">
        <button type="submit">BACK TO FIRST ASSESSMENT</button>
    </form>
</body>
</html>
