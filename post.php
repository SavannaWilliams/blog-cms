<?php
    include 'header.php';
?>


    <main>

    <?php
        function getPostDetailsFromDatabase() {
            // TODO in Module 4
            // get this data from a database instead of hardcoding it
            $postDetails = array('title' => 'Blog Post 1',
                                'content' => 'My first blog post.',
                                'date' => '01/01/2020',
                                'author' => 'Savanna Williams');
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

    <footer>
        <p>	&#169; Savanna Williams 2020</p>
    </footer>

</body>
</html>