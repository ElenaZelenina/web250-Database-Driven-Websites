<h1>Everything Form!</h1>

<h2>Please let us know more about you</h2>
<form action="toc.php?p=form-result.php" method="POST">
    <fieldset>
        <legend>Who you are.</legend>
        <h5>POST form, regular textboxes</h5>
        <div>
            <label for="fname">First name</label>
            <input type="text" id="fname" name="fname" placeholder="your first name" value="Zøg" />
        </div>
        <div>
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" placeholder="your last name" value="Grunkwitz" />
        </div>
        <button type="submit">Submit the form</button>
    </fieldset>
</form>

<form action="toc.php?p=form-result.php" method="POST">
    <fieldset>
        <legend>Pick your favorite food</legend>
        <h5>POST form, checkboxes array</h5>
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
        <button type="submit">Submit the form</button>
    </fieldset>
</form>

<form action="toc.php" method="GET">
    <input type="hidden" name="p" value="form-result.php" />
    <fieldset>
        <legend>Pick one favorite drink</legend>
        <h5>GET form, radiobuttons group</h5>
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
        <button type="submit">Submit the form</button>
    </fieldset>
</form>

<form action="toc.php" method="GET">
    <input type="hidden" name="p" value="form-result.php" />
    <fieldset>
        <legend>Tell about your pet</legend>
        <h5>GET form. Textbox and select</h5>
        <div>
            <label for="petname">Pet name</label>
            <input type="text" id="petname" name="petname" placeholder="your pet name" value="Nibbler" />
        </div>
        <div>
            <label for="pettype">Pet type</label>
            <select id="pettype" name="pettype">
                <option value="animal">Animal</option>
                <option value="bird">Bird</option>
                <option value="insect">Insect</option>
                <option value="alien">Alien creature</option>
            </select>
        </div>
        <button type="submit">Submit the form</button>
    </fieldset>
</form>

<form action="toc.php?p=form-result.php" method="POST">
    <fieldset>
        <legend>The tricky question</legend>
        <h5>POST form, textarea and select with opt grops combined.</h5>
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
        <div>
            <legend>You can add a comment here</legend>
            <textarea cols="60" rows="5" id="comments" name="comments"></textarea>
        </div>
        <button type="submit">Submit the form</button>
    </fieldset>
</form>

