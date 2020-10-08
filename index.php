<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>
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
        <!-- Button needs onclick="showAlert()" for JavaScript code. Not required for JQuery. -->
        <button id="alert-button">Click me!</button>
    </main>

    <?php
        include 'footer.php';
    ?>

</body>
</html>