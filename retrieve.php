<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}

$sql = "SELECT id, title, author, customer FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " - Book ID " . $row['id'] . " - Title " . $row['title'] . " - Author " . $row['author'] . " - Customer " . $row['customer']. "<br>";
    }
    } else {
        echo "O Results";
    };

$conn->close();

?>