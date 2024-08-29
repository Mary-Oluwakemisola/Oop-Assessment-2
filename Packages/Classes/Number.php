<?php

class Number{
    public int $number;

   public function accepts(int $number)
    {
        $this->number = $number;
        return $this;
    }

    public function isEven(): bool
    {
        return $this->number % 2 === 0;
    }

    public function isOdd(): bool
    {
        return $this->number % 2 !== 0;
    }

    public function checkEvenOdd()
    {
        echo $this->number . " is " . ($this->isEven() ? "an Even number!" : "an Odd number!") . "\n";
    }
    public function isPrime(int $number): bool {
        if ($this->number <= 1) {
            return false;
        }

        for($i = 2; $i * $i <= $this->number; $i++){
            if ($this->number % $i === 0) {
            return false;
        }
    }
        return true;
    }


    public function checkPrime()
    {
        echo $this->number . " is " . ($this->isPrime($this->number) ? "a Prime number!" : "not a Prime number.") . "\n";
    }
    public function myName(): bool
    {
        return $this->number % 3 === 0;
    }

    public function backEnd(): bool
    {
        return $this->number % 3 !== 0;
    }

    public function checkNameBackend()
    {
        echo ($this->myName() ? "Yaramola Olamide" : "BackEnd") . "\n";
    }
}