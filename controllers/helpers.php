<?php

define("CLOCK_TITLE", "Clock");
define("SETTINGS_TITLE", "Settings");
define("LOGIN_TITLE", "Login/Create Account");

/**
 * Readers template.
 * 
 * @param template $template
 * @param array $data
 */
function render($template, $data = array())
{
    $path = __DIR__ . '/../views/' . $template . '.php';
    if (file_exists($path))
    { 
        extract($data);
        require($path);
    }
}

?>