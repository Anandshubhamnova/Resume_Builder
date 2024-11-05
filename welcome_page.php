<?php
    require "signup/action_page2.php";
?>
<html>

<head>
    <title>welcome</title>
    <link rel="stylesheet" type="text/css" href="welcome_page.css">
</head>

<body>
    <div class='lbody'>
            <?php 
                echo"<h1>WELCOME $userfname</h1>";
                echo"<br><h1>RESUME</h1>";
                echo"<p>Name: $userfname $userlname</p>";
                echo"<p>Email: $userEmail;</p>";
                echo"<p>Qualification: $userquali</p>";
                echo"<p>Education:$useredu</p>";
                echo"<p>Date Of Birth:$userdob</p>";
                echo"<p>Work Experience:$userworkexp</p>";
                echo"<p>Previous Comapany:$userPrevcom</p>";
                echo"<p>Job Title:$userjobtitle</p>";
            ?>
        </h1>
    </div>
</body>

</html>