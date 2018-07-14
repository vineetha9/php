<?php
session_start();
if(!isset($_SESSION['uname']))
{
    header('location:admin_login.php');
}
$title="welcome to admin";

$name=$_SESSION['uname'];
$content='<h1 align=center>Welcome To '.$name.'</h1>
    <p style="text-transform:uppercase;color:red;font-size:15px;text-align:center">click on the right side menu to view The contents</p>';
   
include 'Template3.php';
?>
