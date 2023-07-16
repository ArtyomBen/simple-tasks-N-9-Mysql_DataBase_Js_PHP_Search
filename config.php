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

$sql = "SELECT name, code FROM country";

$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc ($result)){
      //  echo $row['name'] . '<br>' . $row['code'];
    }
}

?>