<?php
   		$servername = "";
		$username = "";
		$password = "";
		$dbname = "";
    	$dbtable = "";
    	
    	
    	$emailLogin = $_POST['emailLogin'];
    	$passwordlogin = $_POST['passwordLogin'];
    	$rememberme = $_POST['rememberMe'];
    	$firstname = $_POST['firstName'];
    	$lastname = $_POST['lastName'];
    	$email = $_POST['emailInput'];
    	$password = $_POST['passwordInput'];
    	$verifyPassword = $_POST['verifyPassword'];
    	
    	//echo ("$emailLogin $password $rememberme $firstname $lastname $email $password $verifyPassword");
    	
    	

?>

<!DOCTYPE html>
<html>


<head>
    <title>Login/Create Account</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Library links and scripts-->
    <link rel="stylesheet" href="libraries/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="libraries/bootstrap-4.1.3-dist/css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="libraries/bootstrap-4.1.3-dist/css/bootstrap-reboot.min.css"/>
    <script type="text/javascript" src="libraries/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="libraries/popper/popper.min.js"></script>
    <script type="text/javascript" src="libraries/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="libraries/bootstrap-4.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <!--Custom links and scripts-->
    <link rel="stylesheet" href="css/login.css" />
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="loginForm" class="col">
                <form>
                    <legend>Login</legend>
                    <hr/>
                    <div class="form-group">
                        <label for="emailLogin">Email:</label>
                        <input id="emailLogin" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password:</label>
                        <input id="passwordLogin" type="password" class="form-control" />
                    </div>
                    <div class="form-group form-check">
                        <input id="rememberMe" type="checkbox" class="form-check-input" />
                        <label for="rememberMe" class="form-check-label">Remember Me</label>
                    </div>
                    <div class="form-btn">
                        <input class="btn btn-outline-primary" type="submit" value="Login" />
                    </div>
                </form>
            </div>
            <div id="createAccount" class="col">
                <form>
                    <legend>Create Account</legend>
                    <hr/>
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input id="firstName" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input id="lastName" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email:</label>
                        <input id="emailInput" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password:</label>
                        <input id="passwordInput" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="verifyPassword">Verify Password:</label>
                        <input id="verifyPassword" type="password" class="form-control" />
                    </div>
                    <div class="form-btn">
                        <input class="btn btn-outline-primary" type="submit" value="Create Account" />
                    </div>
                </form>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col form-btn">
                <button class="btn btn-outline-danger" onclick="location.href='index.html'">Cancel</button>
            </div>
        </div>
    </div>
</body>

</html>
