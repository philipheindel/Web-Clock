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
                <a class="btn btn-outline-danger" href="../index/index.php">Cancel</a>
            </div>
        </div>
    </div>
</body>