<?php
/**
 * This file holds the standard content for the <head> tag
 * of the three main pages of the application.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo htmlspecialchars($title) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Library links and scripts-->
    <link rel="stylesheet" href="../libraries/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../libraries/bootstrap-4.1.3-dist/css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="../libraries/bootstrap-4.1.3-dist/css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="../libraries/material-icons/material-icons-styling.css"/>
    <link rel="stylesheet" href="../settings/css/settingsMaster.css" />
    <script type="text/javascript" src="../libraries/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../libraries/popper/popper.min.js"></script>
    <script type="text/javascript" src="../libraries/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../libraries/bootstrap-4.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <!--Custom links and scripts-->
    <link rel="icon" href="../libraries/assets/favicon.png" type="image/png" sizes="96x96">
    <?php if ($title == CLOCK_TITLE) {?>
        <link rel="stylesheet" href="css/clock.css" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/stopwatch.css" />
        <link rel="stylesheet" href="css/time_zone.css" />
        <link rel="stylesheet" href="css/timer.css" />
        <script type="text/javascript" src="js/ajax.js"></script>
        <script type="text/javascript" src="js/alarm.js"></script>
        <script type="text/javascript" src="js/clock.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
        <script type="text/javascript" src="js/stopWatch.js"></script>
    <?php } else if ($title == SETTINGS_TITLE) {?>
        <link rel="stylesheet" href="css/settings.css" />
        <<link rel="stylesheet" href="css/cancel.css" /> 
    <?php } else if ($title == LOGIN_TITLE) {?>
        <link rel="stylesheet" href="css/login.css" />
    <?php }?>
</head>