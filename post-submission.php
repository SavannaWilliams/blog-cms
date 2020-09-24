<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Submission</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>PHP Blog CMS</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="post-submission.php">New Post</a>
            </nav>
        </div>
    </header>

    <main>
        <h2 class="post-submission-header">Create Your Post</h2>
        <form action="#" class="post-submission-form">
            <input type="text" placeholder="Title" id="title" name="title">
            <div class="dual-form-fields">
                <input type="text" placeholder="Author" id="author" name="author">
                <input type="text" placeholder="Date" id="date" name="date">
            </div>
            <textarea placeholder="Type your post content here." id="post-content" name="post-content"></textarea>
            <input type="submit" class="button" value="Submit">
        </form>
    </main>

    <footer>
        <p>	&#169; Savanna Williams 2020</p>
    </footer>

</body>
</html>