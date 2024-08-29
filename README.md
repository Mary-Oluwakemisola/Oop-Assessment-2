# PHP Programming Practice Questions

# Author: Yaramola Olamide


# PHP Programming Practice Questions

This repository contains my solutions to the following problems:

## Question 1

Write a program to calculate the area of the following shapes:

- Triangle
- Rectangles
- Circle
- Square

Create variables for the necessary dimensions.  Assign values to the dimensions.  

Print out the result in this template  “The area of a circle with radius 4 is 29”.

My Solution: [Program 1](./Programs/program1.php)

## Question 2

Write a program to calculate the area and volume of the following shapes:

- Sphere
- Cylinder
- Cube
- Cone

Create variables for the necessary dimensions.  Assign values to the dimensions.

Print out the result in this template “The area of a sphere with radius 4 is 29 and the volume of a sphere with radius 4 is 47”.

My Solution: [Program 2](./Programs/program2.php)

## Question 3

Write a program to determine if a given string is a palindrome.

My Solution: [Program 3](./Programs/program3.php)

## Question 4

Write a program to determine if a number is even or odd.

My Solution: [Program 4](./Programs/program4.php)

## Question 5

Write a program to determine if a number is a prime number or not.

My Solution: [Program 5](./Programs/program5.php)

## Question 6

Write a program to determine if a year is a leap year or not.

My Solution: [Program 6](./Programs/program6.php)

## Question 7

Write a program that receives a number from a user and displays “Your Name” if it is a multiple of 3, and “Backend” if it is not a multiple of 3

My Solution: [Program 7](./Programs/program7.php)

## Language Used

PHP

## Solution Installation

Clone this repository: `git clone https://github.com/Mary-Oluwakemisola/phpAssessment

Then, run on your local device.

## Examples

The following are numerous examples of how to use the programs listed above:

### Program 1

```php
<?php
$shape = new ShapeManager();
$shape->createRectangle()->accepts(5, 10)->checkResult();
$shape->createSquare()->accepts(4)->checkResult();
```

## Program 2

```php
<?php
$shape = new ShapeManager();
$shape->createSphere()->accepts(5)->checkResult();
$shape->createCube()->accepts(4)->checkResult();
```

## Program 3

```php
<?php 
$palindrome = new Palindrome();
$userInput = $palindrome->accepts("Madam");
$userInput->checkPalindrome();
```

## Program 4

```php
<?php
$number = new Number();
$number->accepts(6)->checkEvenOdd();
```

## Program 5

```php
<?php
$number = new Number();
$number->accepts(6)->checkPrime();
```

## Program 6

```php
<?php
$year = new Year();
$userInput = $year->accepts(2020);
$userInput->checkLeapYear();
```

## Program 7

```php
<?php
$number = new Number();
$number->accepts(6)->checkNameBackend();
```

 Thank you, and I hope you enjoy the code!