<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     
    <head>
        <title>Employee Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" type="text/css" href="main.css">
    </head>
      
    <body>
        <div id="mainHeader">
            <h1>Employee Portal</h1>
        </div>
        
        <div class="loginDiv">
            <form action="login.php">
                <h2>Welcome, guest.</h2>
                <input type="text" name="uid" placeholder="Username/Email"/>
                <br><br>
                <input type="password" name="pwd" placeholder="Password"/>
                <br><br>
                  <h3 style="color:red;">The username you entered is invalid.</h3>
                <input type="submit" name="submit" value="Login"/>
                <br><br>
            </form>
            
            <form action="createAccount.html">
                <input type="submit" name="createAcc" value="Create New Account"/>
            </form>
            
        </div>
    </body>
    
</html>
