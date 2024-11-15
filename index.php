<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Redirección</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        td {
            cursor: pointer;
        }
        td:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Selecciona una accion</h2>
    
    <table>
        <tbody>
            <tr onclick="redirectToPage('registro_trabajador.html')">
                <td>Registro de caja 1 </td>
            </tr>
            <tr onclick="redirectToPage('turnos.html')">
                <td>solicitar turnos </td>
            </tr>
               <tr onclick="redirectToPage('historial.html')">
                <td>Pantalla de turnos </td>
            </tr>
            <tr onclick="redirectToPage('registro_trabajador2.html')">
                <td>Registro de caja 2 </td>
            </tr>
            </tr>
        </tbody>
    </table>

    <script>
        // Función para redirigir a una página
        function redirectToPage(page) {
            window.location.href = page;
        }
    </script>

</body>
</html>
