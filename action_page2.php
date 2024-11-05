<?php

 session_start();
if (isset($_SESSION['id'])) {
    header('Location:../homepage.php');
}
include '../DatabaseConnection.php';
$userEmail = $_POST['email'];
$userPass = $_POST['password'];
$userfname = $_POST['firstName'];
$userlname = $_POST['lastName'];
$userquali = $_POST['qualification'];
$useredu = $_POST['education'];
$userdob = $_POST['dob'];
$userworkexp = $_POST['workExprience'];
$userPrevcom = $_POST['prevCompany'];
$userjobtitle = $_POST['jobTitle'];
$query = "insert into resumebuilder(email,pass,firstname,lastname,qualification,education,dob,
workexperience,prievouscompany,jobtitle) value('$userEmail','$userPass','$userfname','$userlname','$userquali',
'$useredu','$userdob','$userworkexp','$userPrevcom','$userjobtitle')";
// creating an object of class DatabaseConnection
$connection = new DatabaseConnection();
//calling and storing the data from getConnection function present in class DatabaseConnection
$conn = $connection->getConnection();
//storing the value the query while running in mysql
$request = mysqli_query($conn, $query);

//fetches data from an object request
 if ($request) {
    
    ?>
    <script>
         alert('succesfully submited')
     </script>
    <?php
 } else {
     ?>
    <script>
         alert('wrong creditaials')
     </script>
    <?php
     // header('Location:signin.html');

}
?>