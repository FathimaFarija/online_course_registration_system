document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Hide the form
    document.getElementById('payment-form').classList.add('hidden');

    // Show the confirmation message
    document.getElementById('confirmation-message').classList.remove('hidden');
});