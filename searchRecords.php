<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$last=ucfirst($_POST['lastName']);
$employeeList=file('employees.txt');

include_once 'header.php';
echo '<div class="loginDiv"><table><tr><th>Last Name</th><th>First Name</th><th>Phone Number</th></tr>';
foreach($employeeList as $line){
    $lineArray=str_split($line);
    $lastNameArray = array();
    foreach($lineArray as $char){
        if($char != ":"){
            array_push($lastNameArray, $char);
        } elseif ($char == ":"){
            break;
        }
        $lastName = ucfirst(implode($lastNameArray));
        if($lastName === $last){
            $lineStrings = explode(":",$line);
            echo '<tr><td>'.$lineStrings[0].'</td><td>'.$lineStrings[1].'</td><td>'.$lineStrings[2].'</td></tr>';
        }
    }
}
echo '</table></div>';

