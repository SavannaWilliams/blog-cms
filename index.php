<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Blog CMS</title>
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
            function getPostTitlesFromDatabase() {

                // Get all the post titles from the posts table
                include_once 'db_connect.php';

                $sql = "SELECT title FROM posts";
                $result = mysqli_query($conn, $sql);
                

                // Get each result row as an assoc array, then add title to $postTitles
                $postTitles = array();
                while($row = mysqli_fetch_assoc($result)){
                    array_push($postTitles, $row['title']);
                }
                return $postTitles;
            }
        ?>

        <h2>Published Posts</h2>
        <ul class="post-list">
            <?php
                $postTitles = getPostTitlesFromDatabase();

                foreach($postTitles as $postTitle) {
                    echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
                }
            ?>
        </ul>
    </main>

    <?php
        include 'footer.php';
    ?>

</body>
</html>