<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>

                                                             <h1> NUMBER 3 </h1>


                                            <!-- THINGS TO DO TO ACHIEVE PALINDROME 
 1. Enter a Function to check if a string is a palindrome
 2. Remove spaces and convert the string to lowercase
 3. Reverse the string
 4. Check if the original cleaned string is the same as the reversed string
 5. Check if form is submitted
 6. Validate and check if the input string is a palindrome-->


    <h1>Palindrome Checker</h1>
    <form method="post" action="">
        <label for="inputString">Enter a string or Int:</label>
        <input type="text" id="inputString" name="inputString" required>
        <input type="submit" value="Check">
    </form>

    <?php
    // Function to check if a string is a palindrome
    function isPalindrome($string) {
        // Remove spaces and convert the string to lowercase
        $cleanedString = strtolower(str_replace(' ', '', $string));
        
        // Reverse the string
        $reversedString = strrev($cleanedString);
        
        // Check if the original cleaned string is the same as the reversed string
        return $cleanedString === $reversedString;
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from form
        $userInput = trim($_POST['inputString']);
        
        // Validate and check if the input string is a palindrome
        if (isPalindrome($userInput)) {
            echo "<p>'" . htmlspecialchars($userInput) . "' is a palindrome!</p>";
        } else {
            echo "<p>'" . htmlspecialchars($userInput) . "' is not a palindrome.</p>";
        }
    }
    ?>
    <br><br>

<form action="4-form.html" method="get">
        <button type="submit">Go to Next Page</button>
    </form>
</body>
</html>
