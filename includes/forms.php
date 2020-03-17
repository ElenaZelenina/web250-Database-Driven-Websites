<h1>Forms</h1>

<form action="#" method="get">
    <fieldset>
        <legend>GET Form</legend>
        <div><label for="getfname">First name:</label>
            <input type="text" id="getfname" name="fname" value="John" size="50"></div>
        <div><label for="getlname">Last name:</label>
            <input type="text" id="getlname" name="lname" value="Doe" size="50"></div>
        <p>Favorite character:</p>
        <div>
            <input type="checkbox" id="getcharacter1" name="character1" value="Bean">
            <label for="getcharacter1"> I like Bean</label>
        </div>
        <div>
            <input type="checkbox" id="getcharacter2" name="character2" value="Elfo">
            <label for="getcharacter2"> I like Elfo</label>
        </div>
        <div>
            <input type="checkbox" id="getcharacter3" name="character3" value="Luci">
            <label for="getcharacter3"> I like Luci</label>
        </div>
        <input type="submit" value="Submit">
        <input type="hidden" value="forms.php" name="p">
    </fieldset>
</form>


<?php

if (isset($_GET["fname"])) {

    if (!isset($_GET["character1"]) && !isset($_GET["character2"]) && !isset($_GET["character3"])) {
        $ouputString2 = "Did you ever watch the show?";
    } else {
        $ouputString2 = "";
        if (isset($_GET["character1"])) {
            $ouputString2 .= $_GET["character1"];
        }
        if (isset($_GET["character2"])) {
            $ouputString2 .= ($ouputString2 == "" ? "" : " and ") . $_GET["character2"];
        }
        if (isset($_GET["character3"])) {
            $ouputString2 .= ($ouputString2 == "" ? "" : " and ") . $_GET["character3"];
        }
        $ouputString2 = "You like " . $ouputString2 . "!";
    }
    $ouputString1 = "Welcome, " . $_GET["fname"] . " " . $_GET["lname"] . "!<br>";
    echo $ouputString1;
    echo $ouputString2;
}
?>

<form action="#" method="post">
    <fieldset>
        <legend>POST Form</legend>
        <div><label for="postfname">First name:</label>
            <input type="text" id="postfname" name="fname" value="John" size="50"></div>
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
?>