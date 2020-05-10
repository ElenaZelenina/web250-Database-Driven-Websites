<?php
require("mysql.credentials.php");
$mysqli = new mysqli($db_server, $db_login, $db_pwd, $db_database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    die();
}
$filepath = "toc.php?p=crud_all.php";
$action = "read";

if (isset($_POST["action"])) {
    $action = $_POST["action"];
} elseif (isset($_GET["action"])) {
    $action = $_GET["action"];
}

if ($action == "add") {
    $name = $_POST["name"];
    $race = $_POST["race"];
    $lord = $_POST["lord"];
    $stmt = $mysqli->prepare("INSERT INTO `$table_name` (`name`, `race`, `lord`) VALUES (?, ?, ?)");
    if (!$stmt->bind_param("sss", $name, $race, $lord)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    $stmt->close();
    $mysqli->close();
    header("Location: $filepath");
}

if ($action == "delete") {
    $id = $_GET["id"];
    $stmt = $mysqli->prepare("DELETE FROM `$table_name` WHERE id = ?");
    if (!$stmt->bind_param("i", $id)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    $stmt->close();
    $mysqli->close();
    header("Location: $filepath");
}

if ($action == "update") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $race = $_POST["race"];
    $lord = $_POST["lord"];
    $stmt = $mysqli->prepare("UPDATE `$table_name` SET `name` = ?, `race` = ?, `lord` = ?  WHERE id = ?");

    if (!$stmt->bind_param("sssi", $name, $race, $lord, $id)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    $stmt->close();
    $mysqli->close();
    header("Location: $filepath");
}
?>
<h1>Manage the Kingdoms list</h1>
<?php
$entities = $mysqli->query("SELECT * FROM `$table_name`");
?>
<div id="crud-container">
    <table class="crud-table">
        <thead>
            <tr>
                <th></th>
                <th>Kingdom name</th>
                <th>Main race</th>
                <th>Ruled by</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $entities->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <a href="<?=$filepath?>&action=delete&id=<?= $row['id'] ?>" 
                            title="Delete record" 
                            onclick="return confirm('Are you sure you want to delete the record? This operation can not be undone.')">[x]</a>
                        <a href="<?=$filepath?>&action=edit&id=<?= $row['id'] ?>" title="Edit record">[edit]</a>
                    </td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["race"] ?></td>
                    <td><?= $row["lord"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    if ($action == "edit") {
        if (!$stmt = $mysqli->prepare("SELECT `name`, `race`, `lord` FROM `$table_name` WHERE id = ?")) {
            die("Cant create statement");
        }
        $id = $_GET["id"];
        if (!$stmt->bind_param("i", $id)) {
            die("Can't bind id parameter");
        }
        $stmt->execute();
        $stmt->bind_result($name, $race, $lord);
        $stmt->fetch();
    ?>
        <form action="<?=$filepath?>" method="post">
            <fieldset>
                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="id" value="<?= $id ?>"/>
                <legend>Update record there</legend>
                <label for="name">Kingdom name</label>
                <input type="text" name="name" id="name" size="50" required value="<?= $name ?>" /><br />
                <label for="race">Major race</label>
                <input type="text" name="race" id="race" size="100" required value="<?= $race ?>" /><br />
                <label for="race">Ruled by</label>
                <input type="text" name="lord" id="lord" size="100" required value="<?= $lord ?>" /><br />
                <br />
                <button type="submit">Save</button>
                <button type="cancel" onclick="document.location.href='<?=$filepath?>'">Cancel</button>
            </fieldset>
        </form>
    <?php } else { ?>
        <form action="<?=$filepath?>" method="post">
            <input type="hidden" name="action" value="add" />
            <fieldset>
                <legend>Add new record there</legend>
                <label for="name">Kingdom name</label>
                <input type="text" name="name" id="name" size="50" required placeholder="Name of the kingdom" /><br />
                <label for="race">Major race</label>
                <input type="text" name="race" id="race" size="100" required placeholder="Humans" /><br />
                <label for="race">Ruled by</label>
                <input type="text" name="lord" id="lord" size="100" required placeholder="King John" /><br />
                <br />
                <button type="submit">Add</button>
            </fieldset>
        </form>
    <?php } ?>
</div>
<?php
$mysqli->close();
?>