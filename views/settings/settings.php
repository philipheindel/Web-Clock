<?php
    require_once(__DIR__ . "/../../controllers/helpers.php");
    render("templates/header", array("title"=>SETTINGS_TITLE));
    require("settingsBody.php");
    render("templates/footer");
?>