const btnSignIn = document.getElementById("sign-in"), 
    btnSignUp = document.getElementById("sign-up"),
    formRegister = document.querySelector(".register"),
    formLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", () => {
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide"); 
});

btnSignUp.addEventListener("click", () => {
    formLogin.classList.add("hide");
    formRegister.classList.remove("hide");
});