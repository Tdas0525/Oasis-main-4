<?php 
session_start ();
if(!isset($_SESSION["login"]))

	header("location: notLogin.php");

if(!isset($_SESSION["username"]))
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Banchods !!!</h1>
    <form action="logout.php" method="post">
        <input type="submit" value="Bero Banchod..." name="logout">
    </form>
    
</body>
</html>