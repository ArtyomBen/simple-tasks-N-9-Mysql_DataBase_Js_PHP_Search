<?php
include 'config.php';
if (!empty ($_GET) && isset ($_GET['search'])){
    $countryesSearching = $_GET['search'];
$country = mysqli_real_escape_string($conn, $countryesSearching);
$sql = "SELECT code, name FROM country WHERE name LIKE '$countryesSearching%'";

$result = mysqli_query ($conn, $sql);
if (!$result){
    die (mysqli_error ($conn));
}
$finish= mysqli_fetch_all ($result, MYSQLI_ASSOC);
echo json_encode ($finish);
mysqli_close ($conn);
}