<?php




// Function to check if a number is even or odd
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}

// Get user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the input
    $number = filter_var($_POST["number"], FILTER_VALIDATE_INT);
    
    if ($number !== false) {
        $result = checkEvenOdd($number);
        echo "The number " . htmlspecialchars($number) . " is " . $result . ".";
    } else {
        echo "Please enter a valid integer.";
    }
} else {
    echo "Please submit the form.";
}

