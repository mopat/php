<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
require_once("config.php");
$databasename = "test";

$conn = new mysqli($servername, $username, "", $databasename);
if (createConnection($conn))
    userExists($conn);

function createConnection($conn) {
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return FALSE;
    }
    echo "Connected successfully";

    return true;
}

function userExists($conn) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from user where username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows > 0){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo "<br>LOGIN SUCCESSFUL";
        $expire = time() + 3600 * 24 * 60; //Verfalldatum in 60 Tagen
        setcookie("rememberMe", $username, $expire);
    }

    else
        echo "login failed";
}
?>
<p>
    <a href="index.php">Main Page</a>
</p>
</body>
</html>