<?php 
$conn = mysqli_connect('localhost', 'arthas2103', 'Serghei2103#', 'first_database');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>