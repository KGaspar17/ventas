$(document).ready(function () {
    const form = document.getElementById("venta-form");
    const productoSelect = document.getElementById("producto");
    const precioInput = document.getElementById("precio");
    const newPrecioInput = document.getElementById("new_precio");

    const obtenerPrecioURL = 'link/obtener_precio.php';
    const obtenerNombreURL = 'link/obtener_nombre.php';
    const procesarVentaURL = 'link/modificar_precio.php';

    function obtenerPrecioProductoDesdeBD(producto) {
        return $.ajax({
            url: obtenerPrecioURL,
            method: 'GET',
            data: { producto: producto },
            success: function (data) {
                const precio = parseFloat(data); // Parsear el precio desde el servidor
                precioInput.value = precio.toFixed(2); // Mostrar el precio en el campo de precio
            },
            error: function () {
                console.error('Error al obtener el precio del producto');
            }
        });
    }

    function cargarNombresProductos() {
        return $.ajax({
            url: obtenerNombreURL,
            method: 'GET',
            success: function (data) {
                const nombres = JSON.parse(data);
                nombres.forEach(function (nombre) {
                    const option = document.createElement('option');
                    option.value = nombre;
                    option.textContent = nombre;
                    productoSelect.appendChild(option);
                });
            },
            error: function () {
                console.error('Error al obtener los nombres de los productos');
            }
        });
    }

    // Cuando se cambie la selección de producto, obtener y mostrar el precio actual
    productoSelect.addEventListener("change", function () {
        const productoSeleccionado = productoSelect.value;
        if (productoSeleccionado !== "") {
            obtenerPrecioProductoDesdeBD(productoSeleccionado);
        } else {
            precioInput.value = ""; // Limpiar el campo de precio si no hay producto seleccionado
        }
    });

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const productoSeleccionado = productoSelect.value;
        const newPrecio = parseFloat(newPrecioInput.value);

        // Realizar la lógica de modificación de precio aquí

        // Resto del código para procesar la venta...

        $.ajax({
            url: procesarVentaURL,
            method: 'POST',
            data: {
                producto: productoSeleccionado,
                new_precio: newPrecio // Enviar el nuevo precio al servidor
            },
            success: function (response) {
                if (response === 'success') {
                    alert('Precio modificado con éxito.');
                }
                form.reset();
            },
            error: function () {
                console.error('Error al modificar el precio.');
            }
        });
    });

    cargarNombresProductos();
});
