<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Hecho</title>
</head>
<body>

    <?php
    session_start();

    // Guardar datos del formulario en la sesión
    $_SESSION['name'] = $_POST['Nombre'];
    $_SESSION['recogerollevar'] = $_POST['entrega'];
    $_SESSION['content'] = $_POST['contenido'];

    // Precios por ingrediente
    $precios = [
        "anchoas" => 1,
        "calamares" => 1.2,
        "mejillones" => 1,
        "jamon" => 1.2,
        "tortilla" => 0.8,
        "carne_salsa" => 2,
        "lomo" => 1.5,
        "panceta" => 1.3,
        "jirafa" => 5
    ];

    // Calcular precio total según ingredientes seleccionados
    $precio_total = 0;
    foreach($_SESSION['content'] as $ingrediente){
        $precio_total += $precios[$ingrediente]; // si no existe el ingrediente, suma 0
    }

    // Mostrar resumen del pedido
    echo "Hola " . $_SESSION['name'] . ", tu pedido está listo: " . $_SESSION['recogerollevar'] . "<br>";
    echo "Contenido: ";
    echo implode(", ", $_SESSION['content']) . "<br>";
    echo "Precio total: <strong>$precio_total €</strong>";
    ?>
</body>
</html>
