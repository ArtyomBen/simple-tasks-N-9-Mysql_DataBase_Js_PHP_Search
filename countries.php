<?php
include 'config.php';
if (!empty ($_GET) && isset ($_GET['search'])){
    $some1 = $_GET['search'];
$country = mysqli_real_escape_string($conn, $some1);
$sql = "SELECT code, name FROM country WHERE name LIKE '$some1%'";

$result = mysqli_query ($conn, $sql);
if (!$result){
    die (mysqli_error ($conn));
}
$some= mysqli_fetch_all ($result, MYSQLI_ASSOC);
echo json_encode ($some);
}