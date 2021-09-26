<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'new-rator';

$dsn= 'mysql:host = '.$host.';dbname='.$dbname;

$pdo = new PDO($dsn, $user, $password);

if(!$pdo){
    echo "Not Connected";
}

$query = "SELECT title, body, image, author, is_published, created_at FROM posts WHERE is_published=1 ORDER BY created_at DESC";

$stmt = $pdo->query($query);

$stmt = $stmt->fetch(PDO::FETCH_OBJ);

// var_dump($stmt);

       
$q = "SELECT title, body, image, author, is_published, created_at FROM posts ORDER BY created_at DESC";

$test = $pdo->query($q);





?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>NewRator | Home page</title>
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

    <main>
 