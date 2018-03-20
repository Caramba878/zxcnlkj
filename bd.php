<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:caramba8787.database.windows.net,1433; Database = rewq", "Caramba8787", "535412danNN");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


?>
