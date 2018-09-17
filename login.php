<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pass = 'pass.txt';
$contents = file($pass);
$userIDarr = array();


/*if ((filesize($pass)) != 0) {*/

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    foreach($contents as $line){
        
        $lineArray = str_split($line);

        foreach($lineArray as $char){

            if($char != ":"){
                array_push($userIDarr, $char);
            } elseif($char == ":") {
                break;
            }

            
        }
        
        $userID = implode($userIDarr);
        
        
        if($userID === $uid){

            $exLine = explode(":",$line);
            $testLine = $exLine[1];

            if(password_verify($pwd,$testLine)){
                include_once 'loginSuccess.php';
            } else {
                include_once 'pwdIncorrect.php';
            }
                    
            
        } elseif($userID !== $uid) {
            include_once 'userIncorrect.php';
        }
    }
/*} elseif ((filesize($pass)) == 0) {
    include_once 'userIncorrect.php';
}*/
