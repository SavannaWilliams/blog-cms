<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post- PHP Blog CMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php
        include 'header.php';
    ?>
    <main>

    <?php
        function getPostDetailsFromDatabase() {
            // Get the post title
            $postTitle = rawurldecode($_GET["title"]);

            // Get the post that matches the postTitle
            include_once 'db_connect.php';
            $sql = "SELECT * FROM posts WHERE title = '" . $postTitle . "'";
            $result = mysqli_query($conn, $sql);

            // Get the first row from the result as an associative array
            $postDetails = mysqli_fetch_assoc($result);
            return $postDetails;
        }
        // Post details contains all the data to generate the blog from
        $postDetails = getPostDetailsFromDatabase();
    ?>

        <h2 class="post-title"><?php echo $postDetails["title"]; ?></h2>
        <div class="post-publish-date">
            <p><?php echo $postDetails["date"]; ?></p>
        </div>
        <div class="post-author">
            <p><?php echo $postDetails["author"]; ?></p>
        </div>
        <div class="post-content">
            <p><?php echo $postDetails["content"]; ?></p>
        </div>
    </main>

    <?php
        include 'footer.php';
    ?>

</body>
</html>