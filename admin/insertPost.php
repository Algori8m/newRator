<?php
$host = 'localhost';
$dbname = 'new-rator';
$user = 'root';
$password = '';

$dsn = "mysql:host = " . $host . ";dbname = " . $dbname;

$pdo = new PDO($dsn, $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // $image1 = $_FILES;
    $image = $_FILES['image']['tmp_name'];

    var_dump($image);


    // $query = "INSERT INTO posts (image, title, body, author) VALUES (')"
}else{
    echo "Not Done";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/insert-style.css">
    <title>Insert Post</title>
</head>

<body>
    <header>
        <div class="logoContainer">
            <h2>NewRator</h2>
        </div>

        <nav class="navContainer">
            <ul class="navList">
                <li><a href="#">Home</a></li>
                <li class="categoryLink">
                    Categories <span class="categoryOpen">></span>
                    <ul class="categoryLinksList">
                        <li><a href="#">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </nav>
    </header>
    <div id="mainContent">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="image">
                <label for="image">Image</label>  
                <input type="file" id="image" name="image">
            </div>
            <div class="title">
                <label for="title">Title</label>  
                <input type="text" id="title" name="title">
            </div>
            <div class="body">
                <label for="body">Body</label>  
                <textarea type="text" id="body" name="body" rows="30" cols="30"></textarea>
            </div>
            <div class="author">
                <label for="Author">Author</label>  
                <input type="text" id="Author" name="Author">
            </div>
            <div class="categoryList">
                <label for="categoryList">Category</label>  
                <input type="text" id="categoryList" name="category">
            </div>

            <button type="submit" name="submit">Insert</button>
        </form>
    </div>
</body>

</html>