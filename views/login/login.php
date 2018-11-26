<?php
    require_once(__DIR__ . "/../../controllers/helpers.php");
    render("templates/header", array("title"=>LOGIN_TITLE));
    require("loginBody.php");
    render("templates/footer");
?>

