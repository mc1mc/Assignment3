<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$pass = 'pass.txt';
$contents = file($pass);
$userIDarr = array();

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
if ((filesize($pass)) != 0) {
    foreach($contents as $line){

        $lineArray = str_split($line);

        foreach($lineArray as $char){


            if($char != ":"){

                array_push($userIDarr, $char);
            } elseif($char == ":") {

                break;

            }

            $userID = implode($userIDarr);
        }

        if($userID === $uid){

            include_once 'usernameTaken.php';
        } elseif($userID !== $uid) {
            $add = fopen('pass.txt', 'w');
            $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
            fwrite($add, $uid.":".$pwdHash.":\n");
            include_once 'accCreated.php';
            fclose($add);
        }
    }
} elseif ((filesize($pass)) == 0) {
    $add = fopen('pass.txt', 'w');
    $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
    fwrite($add, $uid.":".$pwdHash."\n");
    include_once 'accCreated.php';
    fclose($add);
}
    

/*}*/


    /*print($userID); echo "<br>";
    $userIDarr = array();*/

?>
