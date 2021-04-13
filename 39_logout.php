<?php
// Start the session and get the data
session_start();  // need to start session before every thing, even before writing html code
session_unset();
session_destroy();
echo "<br> You have been logged out";
?>
