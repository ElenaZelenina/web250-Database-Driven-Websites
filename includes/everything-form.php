<h1>Everything Form!</h1>

<h2>Please let us know more about you</h2>
<form action="#" method="POST" id="everything_form">
    <fieldset>
        <legend>Who you are</legend>
        <div>
            <label for="fname">First name</label>
            <input type="text" id="fname" name="fname" placeholder="your first name" value="Zøg" />
        </div>
        <div>
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" placeholder="your last name" value="Grunkwitz" />
        </div>
    </fieldset>

    <fieldset>
        <legend>Pick your favorite food</legend>

        <div>
            <input type="checkbox" id="steak" name="food[]" value="Snake Root" />
            <label for="steak">Snake Root</label>
        </div>

        <div>
            <input type="checkbox" id="cabbage" name="food[]" value="Candy" />
            <label for="cabbage">Candy</label>
        </div>

        <div>
            <input type="checkbox" id="nectar" name="food[]" value="Nectar" />
            <label for="nectar">Nectar</label>
        </div>
    </fieldset>

    <fieldset>
        <legend>Pick one favorite drink</legend>

        <div>
            <input type="radio" name="drink" id="lemonade" value="Beer" />
            <label for="lemonade">Beer</label>
        </div>
        <div>
            <input type="radio" name="drink" id="root_beer" value="Wine" />
            <label for="root_beer">Wine</label>
        </div>
        <div>
            <input type="radio" name="drink" id="beer" value="Grog" />
            <label for="beer">Grog</label>
        </div>
    </fieldset>

    <fieldset>
        <legend>The tricky question</legend>

        <div>
            <label for="tricky_question">Do you like tricky questions?</label>

            <select id="tricky_question" name="tricky_question">
                <optgroup label="Right answers">
                    <option value="yes">I like such kind of questions.</option>
                    <option value="sure">Sure, I do like them!</option>
                    <option value="ofcourse">Of course, who does not?</option>
                </optgroup>
                <optgroup label="Wrong answers">
                    <option value="no" disabled>No, I don't like them!</option>
                </optgroup>
            </select>
        </div>
    </fieldset>

    <fieldset>
        <legend>You can add a comment here</legend>
        <textarea cols="60" rows="5" id="comments" name="comments"></textarea>
    </fieldset>
    <button type="submit">Submit the form</button>

    <?php 
    if (count($_POST) > 0) {
        echo "<h3>Welcome, " . $_POST["fname"] . " " . $_POST["lname"] . "!</h3>";
        if (isset($_POST["food"])) {
            if (count($_POST["food"]) > 1) {
                echo "You like to eat: ";
                echo "<ul>";
                foreach ($_POST["food"] as $food_name) {
                    echo "<li>$food_name</li>";
                }
                echo "</ul>";
            } else {
                echo "You like to eat " . $_POST["food"][0] . "<br/>";
            }
        }
        if (isset($_POST["drink"])) {
            echo "You like to drink " . $_POST["drink"];
        }
        echo "<br>You like tricky questions<br>";
        if (isset($_POST["comments"]) && strlen($_POST["comments"]) > 0) {
            echo "You would also like to say that " . $_POST["comments"];
        }
    }
    ?>

</form>