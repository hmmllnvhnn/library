<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "book_db");

    if($conn === false) {
        die("Error: could not connect to DB. " . mysqli_connect_error());
    }

    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $author = $_REQUEST['author'];
    $customer = $_REQUEST['customer'];

    $sql = "INSERT INTO books VALUES('$id','$title', '$author', '$customer')";

    if(mysqli_query($conn, $sql)) {
        echo "<h2>Data was succesfully inserted</h2>";
    }
    else {
        echo "Error " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>
</html>