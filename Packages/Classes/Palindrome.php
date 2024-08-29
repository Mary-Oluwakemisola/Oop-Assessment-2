<?php
class Palindrome
{
    public string $palindrome;

    public function accepts(string $palindrome)
    {
        $this->palindrome = $palindrome;
        return $this;
    }

    public function isPalindrome()
    {
        $cleanString = preg_replace("/[^A-Za-z0-9]/", "", strtolower($this->palindrome));

        $reversedString = strrev($cleanString);
       
        return $cleanString === $reversedString;
    }

    public function checkPalindrome()
    {
        echo $this->palindrome . ($this->isPalindrome() ? " is a palindrome!" : " is not a palindrome.");
    }
}
// $palindrome = new Palindrome;
// $palindrome->accepts(")(()")->checkPalindrome();