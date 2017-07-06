<?php
session_start();
session_destroy();
header('location: /mypickup1/index.php');
exit;
?>