$(document).ready(function () {
    const form = document.getElementById("venta-form");
    const productoSelect = document.getElementById("producto");
    const cantidadInput = document.getElementById("cantidad");
    const totalInput = document.getElementById("total");

    const obtenerPrecioURL = 'link/obtener_precio.php';
    const obtenerNombreURL = 'link/obtener_nombre.php';
    const procesarVentaURL = 'link/procesar_venta.php';

    function obtenerPrecioProductoDesdeBD(producto) {
        return $.ajax({
            url: obtenerPrecioURL,
            method: 'GET',
            data: {
                producto: producto
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

    function calcularTotal() {
        const productoSeleccionado = productoSelect.value;
        obtenerPrecioProductoDesdeBD(productoSeleccionado).done(function (data) {
            const precioUnitario = parseFloat(data);
            const cantidad = parseInt(cantidadInput.value);
            const total = cantidad * precioUnitario;
            totalInput.value = total.toFixed(2);
        });
    }

    cantidadInput.addEventListener("input", calcularTotal);
    productoSelect.addEventListener("change", calcularTotal);

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const productoSeleccionado = productoSelect.value;
        const cantidadVendida = parseInt(cantidadInput.value);

        $.ajax({
            url: procesarVentaURL,
            method: 'POST',
            data: {
                producto: productoSeleccionado,
                cantidad: cantidadVendida
            },
            success: function (response) {
                if (response === 'success') {
                    alert('Venta realizada con éxito.');
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
