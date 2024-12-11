
document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const messageBox = document.getElementById('message-box');

            fetch('process_contact.php', {
                method: 'POST',
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        messageBox.textContent = '¡Mensaje enviado con éxito!';
                        messageBox.classList.add('success');
                        contactForm.reset();
                    } else {
                        messageBox.textContent = 'Ocurrió un error al enviar el mensaje.';
                        messageBox.classList.add('error');
                    }
                })
                .catch((error) => {
                    messageBox.textContent = 'Error de conexión. Intente nuevamente más tarde.';
                    messageBox.classList.add('error');
                    console.error(error);
                });
        });
    } else {
        console.error('No se encontró el formulario de contacto en el DOM.');
    }
});
