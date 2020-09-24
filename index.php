<?php
    include 'header.php';
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

    <footer>
        <p>	&#169; Savanna Williams 2020</p>
    </footer>

</body>
</html>