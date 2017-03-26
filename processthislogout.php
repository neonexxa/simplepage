<?php 

setcookie("username", " ", time() - 3600, "/"); // reduce time to negative : exipred cookies
header('Location: index.php');

?>
