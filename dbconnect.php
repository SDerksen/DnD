<?php

$dbconfig['host'] = "127.0.0.1";
$dbconfig['username'] = "dnd";
$dbconfig['database'] = "dnd";
$dbconfig['password'] = "dndrules";

$dblink = mysqli_connect('127.0.0.1', 'dnd', $dbconfig['password'], 'dnd');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
