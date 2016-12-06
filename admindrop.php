<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'dbconnect.php';

if($_GET['item'] == 'book')
{
	$check_email = $conn->query("DELETE FROM products WHERE id='{$_GET['id']}'");
    header("Location: manager.php");
}
else if($_GET['item'] == 'users')
{
	$check_email = $conn->query("DELETE FROM users WHERE id='{$_GET['id']}'");
    header("Location: manager.php");
}
else if($_GET['item'] == 'orders')
{
	$check_email = $conn->query("DELETE FROM orders WHERE id='{$_GET['id']}'");
    header("Location: manager.php");
}
{
	print_r($_GET);
}
?>