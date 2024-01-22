<?php
require 'config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: table.php");
?>
<?php
session_start();
// Unset all of the session variables
$_SESSION = array();
// Destroy the session
session_destroy();
// Redirect to the sign-in page
header("Location: table.php");
exit;
?>