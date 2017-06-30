<?php
session_start();
session_destroy();
header('location: /mypickup2/index.php');
exit;
?>