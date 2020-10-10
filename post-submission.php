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
        <h2 class="post-submission-header">Create a New Post</h2>
        <form action="submit-post.php" method="POST" class="post-submission-form">
            <input type="text" placeholder="Title" id="title" name="title">
            <div class="dual-form-fields">
                <input type="text" placeholder="Author" id="author" name="author">
                <input type="date" placeholder="Date" id="date" name="date">
            </div>
            <textarea placeholder="Type your post content here." id="post-content" name="content"></textarea>
            <input type="submit" class="button" value="Submit">
        </form>
    </main>

    <?php
        include 'footer.php';
        include 'scripts.php';
    ?>

</body>
</html>