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
            <h2>Create an account</h2>
            <form action="createAccount.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email" required/>
                <br><br>
                <input type="password" name="pwd" placeholder="Password" required/>
                <br><br>
                <h3 style="color:red;">Username is already taken.</h3>
                <br>
                <input type="submit" name="submitform" value="Create Account"/>
                
            </form>

        </div>
    </body>
</html>