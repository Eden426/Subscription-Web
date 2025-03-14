// Function to update the payment amount based on contract type
document.getElementById('subType').addEventListener('change', function() {
    var contractType = this.value;
    var paymentSelect = document.querySelector('select'); // Get the payment select element
    var dailyOptions = document.getElementById('payment');
    var weeklyOptions = document.getElementById('paymentwe');
    var monthlyOptions = document.getElementById('paymentmo');

    // Hide all payment options
    dailyOptions.style.display = 'none';
    weeklyOptions.style.display = 'none';
    monthlyOptions.style.display = 'none';

    // Show the corresponding payment options based on contract type
    if (contractType === 'daily') {
        dailyOptions.style.display = 'block';
    } else if (contractType === 'weekly') {
        weeklyOptions.style.display = 'block';
    } else if (contractType === 'monthly') {
        monthlyOptions.style.display = 'block';
    }
});
