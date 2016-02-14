<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 10.02.2016
 * Time: 20:29
 */
require_once("config.php");

$conn = new mysqli($servername, $username, "", $databasename);

if (createConnection($conn))
    checkUserExists($conn);

function createConnection($conn) {
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return FALSE;
    }
    echo "Connected successfully";
    return true;
}

function checkUserExists($conn) {
    $username = $_POST['username'];

    $sql = "SELECT * from user where username ='$username'";

    //result muss vorher aufgerufen werden
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 1)
        echo "<p>USERNAME EXISTS</p>";
    else
        createAccount($conn);
}

function createAccount($conn) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, email, password,id, modified,  created) VALUES ('$username','$email','$password', DEFAULT , DEFAULT,DEFAULT)";

    if (mysqli_query($conn, $sql) == TRUE){
        echo "<p>Account created</p>";
        echo "<p>username: $username</p>";
        echo "<p>email: .$email</p>";
        echo "<p>password: $password</p>";

        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    }
    else  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php