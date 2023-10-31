<?php
session_abort();
unset($_SESSION['user']);
header('location:signin.php');
?>