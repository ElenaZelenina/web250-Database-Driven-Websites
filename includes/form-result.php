<?php
$form_method = "";
$form_content = array();

if (count($_GET) > 1) {
    $form_method = "GET";
    $form_content = array_slice($_GET, 1);
} elseif (count($_POST) > 0) {
    $form_method = "POST";
    $form_content = $_POST;
}

$has_something = count($form_content) > 0;
if ($has_something) {
    $anyValue = false;
    foreach ($form_content as $value) {
        if (is_array($value)) {
            if (count($value) > 0) {
                foreach ($value as $part) {
                    if (strlen(trim($part)) > 0) {
                        $anyValue = true;
                        break;
                    }
                }
            }
        } else {
            if (strlen(trim($value)) > 0) {
                $anyValue = true;
                break;
            }
        }
    }
    $has_something = $anyValue;
}

if ($has_something) {
?>
    <hr />
    <h3>You submitted a form with method="<?= $form_method ?>"</h3>
    Here's your form content
    <table class="form-results">
        <thead>
            <tr>
                <th>Field</th>
                <th>Value(s)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($form_content as $key => $value) {
                if (!is_array($value) && strlen(trim($value)) == 0) {
                    continue;
                }
            ?>
                <tr>
                    <td><?= $key ?></td>
                    <td>
                        <?php
                        if (is_array($value)) {
                            if (count($value) > 1) {
                                echo "<ul>";
                                foreach ($value as $food_name) {
                                    echo "<li>$food_name</li>";
                                }
                                echo "</ul>";
                            } else {
                                echo $value[0];
                            }
                        } else {
                            echo $value;
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php
} else {
?>
    <h5>The form does not contain anything</h5>
<?php
}
?>
<a href="toc.php?p=form-processor.php">Back to form</a>