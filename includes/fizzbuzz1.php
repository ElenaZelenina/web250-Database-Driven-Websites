<h1>Fizz Buzz 1</h1>

<div class="flex-container">
    <div>
        <?php
        printNumber1(100);
        ?>
    </div>
    <div>
        <?php
        printNumber2(100);
        ?>
    </div>
</div>

<?php

function printNumber1($count)
{
    for ($x = 1; $x <= $count; $x++) {
        if (($x % 3 == 0) && ($x % 5 == 0)) {
            $num =  "FizzBuzz";
        } elseif ($x % 3 == 0) {
            $num = "Fizz";
        } elseif ($x % 5 == 0) {
            $num =  "Buzz";
        } else $num = "$x";
        echo "$num<br>";
    }
}

function printNumber2($count)
{
    for ($x = 1; $x <= $count; $x++) {
        if (($x % 3 == 0) && ($x % 5 == 0)) {
            $num =  "Dreamland";
        } elseif ($x % 3 == 0) {
            $num = "Dream";
        } elseif ($x % 5 == 0) {
            $num = "Land";
        } else $num = "$x";
        echo "$num<br>";
    }
}
?>