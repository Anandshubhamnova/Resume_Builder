<?php
session_start();
include './DatabaseConnection.php';

// Ensure the session ID is set
if (!isset($_SESSION['id'])) {
    header('Location: Signin/signin.html');
    exit;
}

// Retrieve data from the database using the session ID
$id = $_SESSION['id'];
$sql = "SELECT * FROM resumebuilder WHERE id ='$id'";
$result = $con->query($sql);

// Fetch the first row from the result set
$row = mysqli_fetch_assoc($result);

// Use lowercase column names to match the database
$userfname = isset($row['firstname']) ? $row['firstname'] : '';
$userlname = isset($row['lastname']) ? $row['lastname'] : '';
$userEmail = isset($row['email']) ? $row['email'] : '';
$userquali = isset($row['qualification']) ? $row['qualification'] : '';
$useredu = isset($row['education']) ? $row['education'] : '';
$userdob = isset($row['dob']) ? $row['dob'] : '';
$userworkexp = isset($row['workexperience']) ? $row['workexperience'] : '';
$userPrevcom = isset($row['prieviouscompany']) ? $row['prieviouscompany'] : '';
$userjobtitle = isset($row['jobtitle']) ? $row['jobtitle'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Display the user's name and resume details
    echo "<h1>WELCOME $userfname $userlname</h1>";
    echo "<br><h1>RESUME</h1>";
    echo "<p>Name: $userfname $userlname</p>";
    echo "<p>Email: $userEmail</p>";
    echo "<p>Qualification: $userquali</p>";
    echo "<p>Education: $useredu</p>";
    echo "<p>Date Of Birth: $userdob</p>";
    echo "<p>Work Experience: $userworkexp</p>";
    echo "<p>Previous Company: $userPrevcom</p>";
    echo "<p>Job Title: $userjobtitle</p>";
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>
