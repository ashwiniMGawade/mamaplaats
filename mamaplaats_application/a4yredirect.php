<?php
    // If you do not use the built-in session functionality in PHP, modify below
    session_start();
    // set domain from the SERVER vars
    $a4yCookieDomain = str_replace("www.", "", (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME']));

    if (!empty($_GET["a4ytrid"]) && !empty($_GET["a4yadvid"])) {
        // set cookie for default 100 days. Actual time will be set when checking order
        setcookie("A4Ytrid[".$_GET["a4yadvid"]."]", $_GET["a4ytrid"],(time() + 100*24*60*60), "/", '.'.$a4yCookieDomain);
        // If you do not use the built-in session functionality in PHP, modify
        // the following expression to work with your session handling routines.
        $_SESSION["A4Ytrid"] = $_GET["a4ytrid"];
    }
    if (empty($_GET["a4yurl"])) {
        $url = "http://".$a4yCookieDomain;
    } else {
        $url = urldecode($_GET["a4yurl"]);
    }
    header("Location: " . $url);
?>