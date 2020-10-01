<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post- PHP Blog CMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
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
    ?>

</body>
</html>