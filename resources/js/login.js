// LOGIN PAGE
        //Add un event listener to the form when it is submitted 
        document.querySelector("form").addEventListener("submit", function(e) {
            e.preventDefault(); 
            

            // Get the value ofthe text input (email field) and reùpve extra spaces.
            const emailInput = document.querySelector("input[type='text']");
            const email = emailInput.value.trim();

            // Simple regex to validate the email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


            // If the email does not match the regex
            if (!emailRegex.test(email)) {
                // show the modal
                const modal = new bootstrap.Modal(document.getElementById("invalidEmailModal"));
                modal.show();

                // Automatically hide the modal after 2 seconds
                setTimeout(() => {
                    modal.hide();
                }, 2000);
            } else {
                // If the email is valid: show success message or redirect
                alert("Login successful ✅");
                // this.submit(); // Uncomment this if you really want to send the form
            }
        });
