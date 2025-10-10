//  JS pour afficher le title, subtitle and scroll 
   
        // JS pour afficher le title, subtitle 
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".overlay-text").classList.add("show");
        });

        //  JS pour afficher au scroll 
        const scrollBtn = document.getElementById("scrollup");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
            scrollBtn.style.display = "flex";
            } else {
            scrollBtn.style.display = "none";
            }
        });
  

        
        //contact page form
       
        document.getElementById("contactForm").addEventListener("submit", function(event){  //Add an event listener to the form when it is submitted
        event.preventDefault(); //prevent the default form submission
        document.getElementById("successMessage").classList.remove("d-none");  //show the success message
        document.getElementById("contactForm").reset();  //reset all form
    
        });

        //Function to toggle the visibility of the passeword field
        function togglePassword() {                     
        const password = document.getElementById("password");  
        //if the input type is "paaseword", change it to "text" (make passeword visible)
        if (password.type === "password") {    
            password.type = "text";
        } else {
            password.type = "password";  //otherwise, change it back to "passeword"(hide passeword)
        }
        }
    

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
