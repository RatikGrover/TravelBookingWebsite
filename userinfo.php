<?php
$conn = mysqli_connect('localhost', 'root');
if ($conn) {
    echo "Connection successful";
} else {
    echo "Not connected";
}

mysqli_select_db($conn, 'youtubewebsitedata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "INSERT INTO userinfodata (user,email,mobile,comments)
VALUES ('$user','$email','$mobile','$comments')";

mysqli_query($conn, $query);
header('location:productionAtSquare.php');
?>