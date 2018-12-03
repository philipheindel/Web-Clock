<?php

require_once __DIR__ . "/../../controllers/helpers.php";
   		$servername = "127.0.0.1";
		$username = "nathanlantz";
		$passwordDB = "";
		$dbname = "myDB";
    	$dbtable = "records";
        $conn;
           
        $conn = connectionDB($servername, $username, $passwordDB, $dbname);
//createDB($conn,$dbname);
//createTable($conn,$dbname,$dbtable);

  
         

       
   
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="loginForm" class="col">
                <form action="" method="post">
                    <legend>Login</legend>
                    <hr/>
                    <div class="form-group">
                        <label for="emailLogin">Email:</label>
                        <input id="emailLogin" name="emailLogin" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password:</label>
                        <input id="passwordLogin" name ="passwordLogin" type="password" class="form-control" />
                    </div>
                    <div class="form-group form-check">
                        <input id="rememberMe" type="checkbox" class="form-check-input" />
                        <label for="rememberMe" name="rememberMe"; class="form-check-label">Remember Me</label>
                    </div>
                    <div class="form-btn">
                        <input class="btn btn-outline-primary" type="submit" name="loginBtn" value="Login" />
                    </div>
                    <div>
                        <?php
           
                        if (isset($_POST["loginBtn"])){
                            
                            
         $emailLogin = $_POST['emailLogin'];
          $passwordlogin = $_POST['passwordLogin'];
          $rememberme = $_POST['rememberMe'];    
                            
                            
                            
                        
                        if(loginChecker($conn,$dbtable,$emailLogin,$passwordlogin)==true){
                            
                            
                        //successful login statement HERE HERE HERE    
                            
                        echo "Correct Login!";
                        }
                        else{
                            echo "Incorrect Username or Password";
                        }
                        }
                        ?>
                    </div>
                    
                    
                </form>
            </div>
            <div id="createAccount" class="col">
                <form action="" method="post">
                    <legend>Create Account</legend>
                    <hr/>
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input id="firstName" name="fname" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input id="lastName" name="lname" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email:</label>
                        <input id="emailInput" name="emailInput" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password:</label>
                        <input id="passwordInput" name="passwordInput" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="verifyPassword">Verify Password:</label>
                        <input id="verifyPassword" name="verifyPassword" type="password" class="form-control" />
                    </div>
                    <div class="form-btn">
                        <input class="btn btn-outline-primary" type="submit"  name="createBtn" value="Create Account" />
                    </div>
                    <div>
                       <?php
                       
                                  if (isset($_POST["createBtn"])){
               
           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $email = $_POST['emailInput'];
           $password = $_POST['passwordInput'];
           $verifyPassword = $_POST['verifyPassword'];
        
        
            if ($email==compare($conn, $email, $dbtable)){
            echo "Account already created!";
            
        }
        else{
            
         addToTable($conn, $dbtable, $fname, $lname,$email,$password,$verifyPassword);    
            
        }
             
           
           }
           
                       
                       
                       ?> 
                        
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