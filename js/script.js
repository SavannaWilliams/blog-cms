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

