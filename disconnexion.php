<?php
// Close session and redirection on the page home
session_destroy();
header("Location: index.php");
exit;

?>
