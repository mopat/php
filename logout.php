<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 10.02.2016
 * Time: 23:04
 */
session_start ();
session_unset ();
session_destroy();

header('Location: index.php');
die();