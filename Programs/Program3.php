<?php
require_once './Packages/Classes/Palindrome.php';

$palindrome = new Palindrome();
$userInput = $palindrome->accepts("Madam");
$userInput->checkPalindrome();
