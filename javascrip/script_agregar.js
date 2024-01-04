$(document).ready(function () {
    const form = document.getElementById("venta-form");
    const productoSelect = document.getElementById("producto");
    const cantidadInput = document.getElementById("cantidad");
    const totalInput = document.getElementById("total");

    const obtenerNombreURL = 'link/obtener_nombre.php';
    const procesarCantidadURL = 'link/procesar_el_agregar_producto.php';

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

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const productoSeleccionado = productoSelect.value;
        const cantidadVendida = parseInt(cantidadInput.value);

        $.ajax({
            url: procesarCantidadURL,
            method: 'POST',
            data: {
                producto: productoSeleccionado,
                cantidad: cantidadVendida
            },
            success: function (response) {
                if (response === 'success') {
                    alert('Se agrego con éxito.');
                }
                form.reset();
                totalInput.value = "";
            },
            error: function () {
                console.error('Error al procesar la venta.');
            }
        });
    });

    cargarNombresProductos();
});
