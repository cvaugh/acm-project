<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ACM Project</title>

        <link rel="stylesheet" href="style.css">
        
        <meta property="og:url" content="https://project.cvaugh.dev">
        <meta property="og:type" content="website">
        <meta property="og:title" content="ACM Project">
        <meta property="og:site_name" content="cvaugh.dev">
        <meta property="og:locale" content="en_US">

        <meta name="theme-color" content="#682F2E">
        <meta name="msapplication-navbutton-color" content="#682F2E">
        <meta name="msapplication-TileColor" content="#682F2E">
        <meta name="apple-mobile-web-app-status-bar-style" content="#682F2E">
    </head>
    <body>
        <div id="topbar"></div>
        <header>
            <a href="#" class="title">ACM Project</a>
            <nav>
                <a href="https://github.com/cvaugh/acm-project">GitHub</a>
            </nav>
        </header>
        <div id="content-wrapper">
            <div id="content">
                <p><code><?php echo CONFIG["db_username"] . "@" . CONFIG["db_host"] ?></code></p>
            </div>
        </div>
    </body>
</html>
