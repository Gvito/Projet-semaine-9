<?php
// Close session and redirection on the page home
session_destroy();
// redirection
header("Location: index.php");
exit;

?>
