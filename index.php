<?php

    $output = null;

    // If form is submitted
    if (isset($_POST["submit-event"])) {
        $output = $_POST["fr-input"];
    }

    if (isset($_POST["clear-event"])) {
        $output = null;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
    </head>
    <body>

        <nav>
            <a href="/">Home</a>
            <a href="/about/">About</a>
            <a href="/Changelogs/">Changelogs</a>
        </nav>
        
        <h2>This is the Home Page</h2>
        <p>File-based routing.</p>

        <?php if ($output !== null) { ?>
            Input value: <h2><?= htmlspecialchars($output, ENT_QUOTES, "UTF-8"); ?></h2>
        <?php } ?>

        <form 
            method="POST"
            action="<?= htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "UTF-8"); ?>"
            >
            <input type="text" name="fr-input">
            <input type="submit" name="submit-event" value="Submit">
        </form>

        <form
            method="POST"
            action="<?= htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "UTF-8"); ?>"
        >
            <input type="submit" name="clear-event" value="Clear Input">
        </form>

    </body>
</html>