
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#contactForm");
    const confirmation = document.querySelector("#confirmationMessage");

    if (form && confirmation) {
        form.addEventListener("submit", function() {
            // event.preventDefault(); // Empêche le rechargement
            confirmation.style.display = "block"; // Affiche le message
            form.reset(); // Vide le formulaire
        });
    }
});

