<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:caramba8787.database.windows.net,1433; Database = rewq", "Caramba8787", "535412danNN");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE  `users` (
 `id` INT NOT NULL AUTO_INCREMENT ,
 `login` VARCHAR( 20 ) NOT NULL ,
 `password` VARCHAR( 35 ) NOT NULL ,
 `email` VARCHAR( 50 ) NOT NULL ,
 `reg_date` VARCHAR( 32 ) NOT NULL ,
 `name_user` VARCHAR( 32 ) NOT NULL ,
 `lastname` VARCHAR( 32 ) NOT NULL ,
PRIMARY KEY (  `id` )
)";

$conn->quary($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


$login = $_SESSION['login'];
$password = $_SESSION['password'];
$id_user = $_SESSION['id'];
?>
