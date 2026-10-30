<?php
include('includes/db.php');
$pass = md5($_POST['password']);
mysqli_query($db, "SELECT * FROM users WHERE name = '" . $_POST['user'] . "' AND pass = '$pass'");
