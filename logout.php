<?php 
session_start();
if(session_destroy())//Destroying All Session
{
header("Location: index.php");//Redirecting To Home Page
}
?>