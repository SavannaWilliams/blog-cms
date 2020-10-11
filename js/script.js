// Javascript version of the button.
// function showAlert() {
//     document.getElementById("alert-button").style.display = "none";
//     alert("Hi there!");
// }

// JQuery version of the button
$(document).ready(function() {
    $('#alert-button').click(function() {
        $(this).hide();
        alert("Hi there!");
    })
})

// Call list library
var options = {
    valueNames: [ 'title' ]
};

new List('sortable-blog-list', options);

// Ace editor initialization script
var editor = ace.edit("editor");
editor.setTheme("ace/theme/eclipse");
editor.session.setMode("ace/mode/html");


// Submit button for post-submission.php

$("#submit").click(function() {
    var title = $("#title").val();
    var author = $("#author").val();
    var date = $("#date").val();
    var content = editor.getValue();

    $.post("submit-post.php", { 
        title: title, 
        content: content, 
        author: author, 
        date: date 
    }).done(function() {
        window.location = "/index.php";
    });

});