<?php
session_start();
if (isset($_SESSION['user'])) {
    session_destroy();
    header('Location:Signin/signin.html');
} else {
    header('Location:Signin/signin.html');
}