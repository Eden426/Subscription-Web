// Function to validate the form before submission
document.querySelector('form').addEventListener('submit', function(event) {
    // Get the form elements
    var name = document.getElementById('name').value;
    var address = document.getElementById('address').value;
    var phone = document.getElementById('number').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('pwd').value;

    // Basic validation checks
    if (name === "" || address === "" || phone === "" || email === "" || password === "") {
        alert("All fields are required!");
        event.preventDefault();  // Prevent form submission if validation fails
        return;
    }

    // Additional validation for phone number (ensure it is numeric and has 10 digits)
    if (!/^\d{10}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        event.preventDefault();  // Prevent form submission if phone number is invalid
        return;
    }

    // Simple email validation (not comprehensive, just basic format check)
    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault();  // Prevent form submission if email is invalid
        return;
    }

    // You can add more validations as needed, such as password strength, etc.
    // For now, we assume password validation is simple (just ensure it's not empty).
});
