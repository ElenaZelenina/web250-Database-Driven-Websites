<h1>Fizz Buzz Bang Everything!</h1>

<form action="#" method="post">
    <fieldset>
        <legend>POST Form</legend>
        <div><label for="postname">Please enter your name:</label>
            <input type="text" id="postname" name="name" value="John Doe" size="100"></div>
        <div><label for="postlname">Last name:</label>
            <input type="text" id="postlname" name="lname" value="Doe" size="50"></div>
        <p>Favorite character:</p>
        <div>
            <input type="checkbox" id="postcharacter1" name="character1" value="Bean">
            <label for="postcharacter1"> I like Bean</label>
        </div>
        <div>
            <input type="checkbox" id ="postcharacter2" name="character2" value="Elfo">
            <label for="postcharacter2"> I like Elfo</label>
        </div>
        <div>
            <input type="checkbox" id="postcharacter3" name="character3" value="Luci">
            <label for="postcharacter3"> I like Luci</label>
        </div>
        <input type="submit" value="Submit">
    </fieldset>
</form>


<?php

if (isset($_POST["fname"])) {

    if (!isset($_POST["character1"]) && !isset($_POST["character2"]) && !isset($_POST["character3"])) {
        $ouputString2 = "Did you ever watch the show?";
    } else {
        $ouputString2 = "";
        if (isset($_POST["character1"])) {
            $ouputString2 .= $_POST["character1"];
        }
        if (isset($_POST["character2"])) {
            $ouputString2 .= ($ouputString2 == "" ? "" : " and ") . $_POST["character2"];
        }
        if (isset($_POST["character3"])) {
            $ouputString2 .= ($ouputString2 == "" ? "" : " and ") . $_POST["character3"];
        }
        $ouputString2 = "You like " . $ouputString2 . "!";
    }
    $ouputString1 = "Welcome, " . $_POST["fname"] . " " . $_POST["lname"] . "!<br>";
    echo $ouputString1;
    echo $ouputString2;
}

printNumber1(100);

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
?>