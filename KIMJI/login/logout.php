<?php
session_start();
session_unset();  // Saare session variables remove karega
session_destroy(); // Session destroy karega
header("Location: login.html"); // User ko homepage ya login page par redirect karega
exit();
?>
