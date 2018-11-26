<?php

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Delete Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        button[type=button] {
             width: 15%;
             margin:auto;
             text-align: center;
        }
        .buttons {
            padding: 10px;
            margin: auto;
            text-align: center;
        }
        .title{
            margin: auto;
            padding: 2px;
            font-size: 20px;
            text-align: center;
        }
      
    </style>
</head>

<body>
    <div class="title">
            <label for="buttons">Are you sure you want to remove your account?</label>
    </div>

    <div class="buttons">
        <button type="button" class="btn btn-outline-success">Yes</button>
        <button type="button" class="btn btn-outline-danger">No</button>
    </div>
</body>

</html>
