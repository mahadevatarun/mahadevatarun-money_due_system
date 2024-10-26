<?php
function connectDB() {
    $conn = new mysqli('localhost', 'root', '', 'money_due_system');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
