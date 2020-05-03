<h1>Fizz Buzz Bang Everything!</h1>

<form action="#" method="post">
    <fieldset>
        <div><label for="postname">Your name:</label>
            <input type="text" id="postname" name="name" value="John Doe" size="40"></div>
        <div><label for="startnumber">Count from:</label>
            <input type="number" id="startnumber" name="startnumber" value="1"></div>
        <div><label for="endnumber">Count to:</label>
            <input type="number" id="endnumber" name="endnumber" value="100"></div>
        <div>Enter the values to be used</div>
        <table>
            <thead>
                <tr>
                    <th>Word to display</th>
                    <th>Number</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> <input type="text" id="word1" name="word1" value="Fizz"></td>
                    <td><input type="number" id="number1" name="number1" value="3"></td>
                </tr>
                <tr>
                    <td><input type="text" id="word2" name="word2" value="Buzz"></td>
                    <td><input type="number" id="number2" name="number2" value="5"></td>
                </tr>
                <tr>
                    <td><input type="text" id="word3" name="word3" value="Bang"></td>
                    <td><input type="number" id="number3" name="number3" value="7"></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Submit">
    </fieldset>
</form>
<?php

if (isset($_POST["name"])) {
    $ouputString1 = "Welcome, " . $_POST["name"] . "!<br>";
    echo $ouputString1;
    printNumber1($_POST["startnumber"], $_POST["endnumber"]);
}

function printNumber1($x, $count)
{
    $word1 = $_POST["word1"];
    $word2 = $_POST["word2"];
    $word3 = $_POST["word3"];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    if ($number1 != 0 && $number2 != 0 && $number3 != 0) {
        for (; $x <= $count; $x++) {
            $num = "";
            if ($x % $number1 == 0) {
                $num = $word1;
            }
            if ($x % $number2 == 0) {
                $num .= $word2;
            }
            if ($x % $number3 == 0) {
                $num .= $word3;
            }
            if ($num == "") {
                $num = "$x";
            }
            echo "$num<br>";
        }
    } else echo "Number cannot be zero or empty.";
}
?>