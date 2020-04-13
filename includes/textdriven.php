<h1>Text-Driven Website</h1>
<?php
/*
$lines - 2 dimention array of the whole document 
$myfile - file handler to records.txt
$nextline - one line from the file
$character - 1 dimention array
$name - first element of the $character array
$me - chosen character
$char - is used for the syntax purpuse
*/
if(isset($_GET["name"])) {
    $name = str_replace("_", " ", $_GET["name"]);
}
$lines = [];
$myfile = fopen("./includes/records.txt", "r") or die("Unable to open file!");
while (!feof($myfile)) {
    $nextline = fgets($myfile);
    $character = explode("||", $nextline);
    if (!isset($name)) {
        $name = $character[0];
    }
    $lines[$character[0]] = $character;
}
fclose($myfile);
$me = $lines[$name];
?>

<div class="textdriven">
    <aside>
        <ul>
            <?php foreach ($lines as $name => $char) { ?>
                <li><a href="?p=textdriven.php&name=<?= str_replace(" ", "_", $name) ?>"><?= $name ?></a></li>
            <?php } ?>
        </ul>
    </aside>
    <article>
        <h2><?= $me[0] ?></h2>
        <div class="character">
        <img src="images/<?= $me[1] ?>" alt="image of the charachter" />
        <div>
            <?= $me[2] ?>
        </div>
        </div>
    </article>
</div>
<p>You can find more information about Disenchantment characters on its <a href="https://disenchantment.fandom.com/wiki/Category:Characters">fandom</a>.</p>