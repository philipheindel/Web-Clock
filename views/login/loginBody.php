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
                            
                            
         $emailLogin = filter_var($_POST['emailLogin'], FILTER_SANITIZE_STRING);
          $passwordlogin = filter_var($_POST['passwordLogin'], FILTER_SANITIZE_STRING);
          $rememberme = filter_var($_POST['rememberMe'], FILTER_SANITIZE_STRING);    
                            
                            
                            
                        
                        if(loginChecker($conn,$dbtable,$emailLogin,$passwordlogin)==true){
                            
                            if(empty($_POST['emailLogin']) || empty($_POST['passwordLogin'])){
                            echo "Please enter a email and password";
                            }
                            else{
                        //sends back to main page   
                         header('Location: /views/index/index.php');   
                        //successful login statement HERE HERE    
                            
                        echo "Correct Login!";
                                
                            }
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
               
           $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
           $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
           $email = filter_var($_POST['emailInput'], FILTER_SANITIZE_STRING);
           $password = filter_var($_POST['passwordInput'], FILTER_SANITIZE_STRING);
           $verifyPassword = filter_var($_POST['verifyPassword'], FILTER_SANITIZE_STRING);
           
           if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['emailInput']) || empty($_POST['passwordInput']) || empty($_POST['verifyPassword'])){
               echo "Please fill out form!";
           }
           else {
               if($_POST['passwordInput']==$_POST['verifyPassword']){
                   
            if ($email==compare($conn, $email, $dbtable)){
            echo "Account already created!";    
               }
                       else{
            
         addToTable($conn, $dbtable, $fname, $lname,$email,$password,$verifyPassword);    
            
        }
               }
               
               else{
                   
                   echo "password and verifyPassword must match";
 
               }
               
           
            
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