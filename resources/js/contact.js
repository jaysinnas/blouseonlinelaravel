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