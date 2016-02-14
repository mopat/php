<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 14.02.2016
 * Time: 18:33
 */
require_once("config.php");

$conn = new mysqli($servername, $username, "", $databasename);

if (createConnection($conn))
    saveData($conn);

function createConnection($conn) {
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return FALSE;
    }
    echo "Connected successfully";

    return true;
}

function saveData($conn){
    $articleSchreiber = $_POST["username"];
    echo $articleSchreiber;
    $sql = "SELECT id FROM user WHERE username = 'pat'";
$result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $userId = $row['id'];
    $articleName = $_POST["artikelname"];
    $artikelInhalt = $_POST["artikelinhalt"];
    $dateEvent = $_POST["date_event"];
    echo $dateEvent;
    print_r($userId);

    $phpdate = strtotime( $dateEvent );
    $mysqldate = date( 'Y-m-d', $phpdate );
    $saveSql = "INSERT into articles (articlename, content, id, date_event, modified, created, user_id) VALUES ('$articleName', '$artikelInhalt', DEFAULT ,$mysqldate, DEFAULT , DEFAULT , $userId)";
   if(mysqli_query($conn, $saveSql))
       echo "ARTIKEL SAVED";
    else "ERROR SAVING ARTIKEL";
}