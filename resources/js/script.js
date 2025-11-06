import './bootstrap';

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
  

      