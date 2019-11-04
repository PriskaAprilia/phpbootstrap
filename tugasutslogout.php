<?php
session_start();
if (isset($_SESSION['akseslogin'])) {
	unset($_SESSION);
	session_destroy();
	header('location:tugasutstugas1.php');
}
?>