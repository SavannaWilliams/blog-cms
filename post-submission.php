<?php
    include 'header.php';
?>

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