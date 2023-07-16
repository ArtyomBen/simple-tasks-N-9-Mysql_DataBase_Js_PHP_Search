<?php

$servername = 'localhost';
$username = 'root';
$paswword = '';
$dbname = 'training';

$conn = mysqli_connect ($servername, $username, $paswword, $dbname);

if (!$conn){
    die ('error' . mysqli_connect_error ());
}else {
    'connect success';
}
?>