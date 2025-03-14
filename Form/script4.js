// JavaScript for click-to-enlarge image feature
const imageLinks = document.querySelectorAll('.image-link');

imageLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        // Prevent the default behavior of the link (which is to open the image directly)
        event.preventDefault();
        
        // Get the image source (the path of the clicked image)
        const imgSrc = this.querySelector('img').src;
        
        // Open a larger version of the image in a new window
        const newWindow = window.open("", "Image", "width=800,height=600");
        newWindow.document.write(`<img src="${imgSrc}" style="width:100%; height:auto;">`);
    });
});