<?php
$empTxt = fopen('employees.txt','a');

$firstN=ucfirst($_POST['first']);
$lastN=ucfirst($_POST['last']);
$phoneN=ucfirst($_POST['phone']);
        

$data = sprintf($lastN.":".$firstN.":".$phoneN."\r\n");
fwrite($empTxt, $data);
include_once 'recordPosted.php';

