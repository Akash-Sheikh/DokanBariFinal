<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dragonfoods";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record

$id = $_POST['id'];
$status = "true";

$sql = ("UPDATE manager_info SET status = '$status' WHERE id = '$id'");

if (mysqli_query($conn, $sql)) {
    echo true;
} else {
    echo false;
}

mysqli_close($conn);
?>