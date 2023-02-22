<?php
session_start(); //start a session
//Check to see if the user has logged in
//If they haven't $_Session['username'] will not exist and
//they will be directed back to the login form

if (!isset($_SESSION['potatusernamm'])){
    sleep(2);
    header("Location:sign_in.php");
    exit;
}
?>
