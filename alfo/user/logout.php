<?php
session_start();
unset($_SESSION['alfouser_id']);
unset($SESSION['alfoemail']);
session_unset();
session_destroy();
header("Location: login.php");
?>