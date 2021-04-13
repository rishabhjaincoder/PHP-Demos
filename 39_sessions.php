<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info before starting the session
session_start();
$_SESSION['username'] = "Harry";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";
?>
