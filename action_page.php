<?php

session_start();
if (isset($_SESSION['user'])) {
    header('Location:../homepage.php');
}
include '../DatabaseConnection.php';
$userEmail = $_POST['email'];
$userPass = $_POST['password'];
$query = "select * from resumebuilder where email = '$userEmail' and pass = '$userPass'";
// creating an object of class DatabaseConnection
$connection = new DatabaseConnection();
//calling and storing the data from getConnection function present in class DatabaseConnection
$con = $connection->getConnection();
//storing the value the query while running in mysql
$request = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($request);
 if ($row) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];

     header('Location:../homepage.php');
 } else {
     ?>
    <script>
         alert('wrong creditaials')
     </script>
    <?php
     // header('Location:signin.html');

}
?>