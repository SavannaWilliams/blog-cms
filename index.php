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
        include_once 'db_connect.php';
    ?>

    <main>
        <?php
            function getPostTitlesFromDatabase() {
                //TODO in Module 4
                // get this data from a database instead of hardcoding it
                $postTitles = array("Blog Post 1", "Blog Post 2","Blog Post 3", "Blog Post 4");
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