<?php
$host = "10.126.98.13";
$dbname = "wms";
$user = "wms_user";
$password = "2HviB7A%R0";

// Connection string
$conn_string = "host=$host dbname=$dbname user=$user password=$password";

$conn = pg_connect($conn_string);

if (!$conn) {
    echo "Error: Unable to connect to the database.\n";
    exit;
}

// Simple query example: get PostgreSQL version
$result = pg_query($conn, "SELECT version();");

if (!$result) {
    echo "Error: Query failed.\n";
    exit;
}

$version = pg_fetch_result($result, 0, 0);

echo "PostgreSQL version: $version\n";

pg_close($conn);
?>
