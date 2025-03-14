// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Change the background color when a link is clicked
    const links = document.querySelectorAll('header a');
    links.forEach(link => {
        link.addEventListener('click', function() {
            document.body.style.backgroundColor = 'lightblue'; // Change background color
        });
    });
});
