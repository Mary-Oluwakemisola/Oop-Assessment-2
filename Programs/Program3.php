<?php
require './Packages/Classes/palindrome.php';

$palindrome = new Palindrome();
$userInput = $palindrome->accepts("Madam");
$userInput->checkPalindrome();