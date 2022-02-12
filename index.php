<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./main.css">
        <title>nyogate</title>
    </head>
    <body>
    <div id="center">
        <h1>...</h1>
        <p>nyogate v<?php include('./config.inc.php'); echo $VER_NUMBER; ?></p> 
        <form method="post" action="api/auth.php" name="form">
            <input type="text" name="auth"><button type="submit">submit</button>
        </form>
    </div>
    </body>
</html>