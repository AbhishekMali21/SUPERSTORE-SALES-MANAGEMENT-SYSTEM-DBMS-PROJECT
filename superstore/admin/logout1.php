<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /superstore/index.php"); // Redirecting To Home Page
}
?>


