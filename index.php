<?php
session_start();
$_SESSION;

include("connect.php");
include("function.php");
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Practical Training Website</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>
    <br>
    Hello, <?php echo $user_data['user_name']; ?>
</body>

</html>
