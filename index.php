<?php
session_start();
if (empty($_SESSION['username'])) {
	header('location: login.php');
}
else if (isset($_SESSION['username'])) {
	header('location: dashboard.php');
}
?>