<?php
require_once __DIR__ . "/../../controllers/helpers.php";
render("templates/header", array("title" => CLOCK_TITLE));
require "indexBody.php";
render("templates/footer");
