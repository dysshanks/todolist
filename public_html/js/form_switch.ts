document.addEventListener("DOMContentLoaded", () => {
    const regSwitch = document.getElementById("reg-switch");
    const logSwitch = document.getElementById("log-switch");
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");

    if (regSwitch && loginForm && registerForm) {
        regSwitch.addEventListener("click", (e: Event) => {
            e.preventDefault();
            loginForm.style.display = "none";
            registerForm.style.display = "block";
        });
    }

    if (logSwitch && loginForm && registerForm) {
        logSwitch.addEventListener("click", (e: Event) => {
            e.preventDefault();
            loginForm.style.display = "block";
            registerForm.style.display = "none";
        });
    }
});
