<?php
    // Get the data to insert into the database
    $title = $_POST["title"];
    $content = $_POST["content"];
    $author = $_POST["author"];
    $date = $_POST["date"];

    // Insert the data with the sql query
    include_once 'db_connect.php';
    $sql="INSERT INTO posts (title, content, author, date) VALUES ('" .     
        $title . "','" .  $content . "','" . $author . "','" . $date . "')";
    $result = mysqli_query($conn, $sql);

    // Redirect to homepage
    header("Location: index.php");
?>