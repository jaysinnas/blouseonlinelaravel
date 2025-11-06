// Select elements
const resetForm = document.getElementById('resetForm');
const resetEmail = document.getElementById('resetEmail');
const resetSuccess = document.getElementById('resetSuccess');
const invalidEmailModal = new bootstrap.Modal(document.getElementById('invalidEmailModal'));

// Example list of registered emails (simulated)
const registeredEmails = ["y@hotmail.fr", "example@gmail.com", "user@test.com"];

resetForm.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent page reload

    const emailValue = resetEmail.value.trim().toLowerCase();

    // Check if the email is registered
    if (registeredEmails.includes(emailValue)) {
        // Show success message
        resetSuccess.classList.remove('d-none');

        // Reset the form
        resetForm.reset();

        // Hide the message after 5 seconds
        setTimeout(() => {
            resetSuccess.classList.add('d-none');
        }, 5000);

        // Send a request to the server to reset the password
        fetch('/api/forgot-password', {          // Replace with your actual server endpoint
            method: 'POST',                       // HTTP method
            headers: {
                'Content-Type': 'application/json' // Tell the server we send JSON
            },
            body: JSON.stringify({ email: emailValue }) // Convert data to JSON string
        })
        .then(response => response.json())        // Parse JSON response from server
        .then(data => {
            console.log(data);                   // Log server response (optional)
            // You can also display a custom message from server
            if(data.success){
                resetSuccess.textContent = data.message;
            }
        })
        .catch(error => {
            console.error('Error:', error);      // Handle errors
        });

    } else {
        // Email not found, show modal
        invalidEmailModal.show();
    }
});
