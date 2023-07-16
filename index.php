<?php
require_once 'config.php';
$sql = "SELECT DISTINCT Continent FROM country
WHERE Continent IS NOT NULL
ORDER BY Continent";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die(mysqli_error($conn));
}
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="script.js"></script>
<h1>Countries</h1>
<input type="text" name="search" />
<div id="search-results"></div>
