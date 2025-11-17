document.addEventListener("DOMContentLoaded", () => {
    // Recupération des éléments
    const btnLogin = document.getElementById("loginBtn");
    const btnRegister = document.getElementById("registerBtn");

    const formLogin = document.getElementById("loginForm");
    const formRegister = document.getElementById("registerForm");

    // Fonctions d'affichage du formulaire login
    function showLogin() {
        formLogin.classList.remove("hidden");
        formRegister.classList.add("hidden");

        btnLogin.classList.add("text-primary", "border-primary");
        btnLogin.classList.remove("text-neutral-600", "border-neutral-600");

        btnRegister.classList.add("text-neutral-600", "border-neutral-600");
        btnRegister.classList.remove("text-primary", "border-primary");
    }

    // Fonctions d'affichage du formulaire register
    function showRegister() {
        formRegister.classList.remove("hidden");
        formLogin.classList.add("hidden");

        btnRegister.classList.add("text-primary", "border-primary");
        btnRegister.classList.remove("text-neutral-600", "border-neutral-600");

        btnLogin.classList.add("text-neutral-600", "border-neutral-600");
        btnLogin.classList.remove("text-primary", "border-primary");
    }

    // Charger le mode envoyé par Blade
    const mode = document.body.dataset.mode;
    mode === "register" ? showRegister() : showLogin();

    // Clics
    btnLogin.addEventListener("click", () => {
        formLogin.reset();
        showLogin();
    });

    btnRegister.addEventListener("click", () => {
        formRegister.reset();
        showRegister();
    });
});
