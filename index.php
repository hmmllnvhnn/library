<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Library Management</h1>

    <form action="insert.php" method="post">
        <p>
            <label for="ID">Book ID</label>
            <input type="text" name="id" id="id">
        </p>
        <p>
            <label for="Title">Title</label>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="Author">Author</label>
            <input type="text" name="author" id="author">
        </p>
        <p>
            <label for="Customer">Customer</label>
            <input type="text" name="customer" id="customer">
        </p>
        <input class="btn btn-success" type="submit" value="Submit">
    </form>
    
</body>
</html>