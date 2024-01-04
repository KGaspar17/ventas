$(document).ready(function () {
    // Obtener referencias a los elementos del formulario y del mensaje
    const form = document.getElementById("recuperar-form");
    const newPasswordInput = document.getElementById("new_password");
    const messageContainer = document.getElementById("message");

    // URL para la recuperación de contraseña en el archivo PHP
    const recuperarContraseñaURL = 'contra.php';

    // Agregar el evento de submit al formulario
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Obtener los valores de los campos del formulario
        const nombre = document.getElementById("name").value;
        const apellidoP = document.getElementById("apellidoP").value;
        const apellidoM = document.getElementById("apellidoM").value;
        const usuario = document.getElementById("usu").value;
        const newPassword = newPasswordInput.value;

        // Enviar una solicitud AJAX al archivo PHP
        $.ajax({
            url: recuperarContraseñaURL,
            method: 'POST',
            data: {
                name: nombre,
                apellidoP: apellidoP,
                apellidoM: apellidoM,
                usu: usuario,
                new_password: newPassword
            },
            success: function (response) {
                // Mostrar mensajes según la respuesta del archivo PHP
                if (response === 'success') {
                    alert('Contraseña recuperada exitosamente.');
                    form.reset();
                } else if (response === 'password_length_error') {
                    alert('La nueva contraseña debe tener entre 8 y 15 caracteres.');
                } else if (response === 'data_mismatch_error') {
                    alert('Los datos ingresados no coinciden con nuestros registros.');
                } else {
                    alert('Error al procesar la recuperación de contraseña. Inténtalo de nuevo.');
                }
            },
            error: function () {
                alert('Error al procesar la recuperación de contraseña. Inténtalo de nuevo.');
            }
        });
    });
});
