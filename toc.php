<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="web, website, portfolio, html, css" />
    <title>Disenchantment: Table of Contents</title>
    <link href="styles/brand.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
    <div id="page-container">
        <div data-include="includes/multipage-header.inc.html"></div>
        <main>
            <?php
            $sPage = "home.php";
            if (isset($_GET["p"])) {
                $sPage = $_GET["p"];
            }
            include("includes/" . $sPage);
            ?>
        </main>
        <div data-include="includes/footer.inc.html"></div>
        <script src="scripts/HTMLInclude.js"></script>
    </div>
</body>

</html>