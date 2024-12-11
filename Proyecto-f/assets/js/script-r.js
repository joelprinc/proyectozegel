
document.addEventListener('DOMContentLoaded', () => {
    // Select elements by their IDs and classes
    const btnSignIn = document.getElementById('sign-in');
    const btnSignUp = document.getElementById('sign-up');
    const formRegister = document.querySelector('.register');
    const formLogin = document.querySelector('.login');

    // Ensure all elements are available
    if (btnSignIn && btnSignUp && formRegister && formLogin) {
        // Event listener for "Iniciar Sesión" button
        btnSignIn.addEventListener('click', () => {
            formRegister.classList.add('hide');
            formLogin.classList.remove('hide');
        });

        // Event listener for "Registrarse" button
        btnSignUp.addEventListener('click', () => {
            formLogin.classList.add('hide');
            formRegister.classList.remove('hide');
        });
    } else {
        console.error('Uno o más elementos necesarios no se encuentran en el DOM.');
    }
});
