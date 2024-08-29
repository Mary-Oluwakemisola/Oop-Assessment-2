
<?php
class Year
{
    public int $year;

    public function accepts($year)
    {
        $this->year = $year;
        return $this;
    }

    public function isLeapYear(): bool
    {
        return $this->year % 4 === 0  && ($this->year % 100 !== 0 || $this->year % 400 === 0);
    }

    public function checkLeapYear()
    {
        echo  $this->year . ($this->isLeapYear() ? " is a leap year!" :  " is not a leap year.");
    }
}
