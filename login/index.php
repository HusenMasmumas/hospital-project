<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>เข้าสู่ระบบ</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="System.css">
  </head>
  <body>
 
<form class="box" action="check.php" method="post">
  <h1>Login</h1>
  <input type="text"  required class="form-control" name="email"  placeholder="Username">
  <input type="password" required class="form-control" name="pass" placeholder="Password">
  <input type="submit" name="" value="Login">
</form>
 
 
  </body>
</html>