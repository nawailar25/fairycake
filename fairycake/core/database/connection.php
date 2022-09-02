<?php

$severname="localhost";
$username="root";
$password="";
$dbname= "fairycake";

try {
    $conn=new PDO("mysql:host=$severname;dbname=$dbname",$username,$password);

    $conn->setAttribute(POD:ATTR_ERRMODE, POD::ERRMODE_EXCEPTION);
    echo "Connect successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " .$e->getMessage();
}

?>
