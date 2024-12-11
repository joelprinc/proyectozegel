document.addEventListener('DOMContentLoaded', () => {
    const contactButton = document.getElementById('nav-main-contact');

    if (contactButton) {
        contactButton.addEventListener('click', (e) => {
            e.preventDefault(); // Prevenir la acción predeterminada
            window.location.href = 'registro.php'; // Redirigir manualmente
        });
    } else {
        console.warn('No se encontró el botón con ID nav-main-contact.');
    }
});

