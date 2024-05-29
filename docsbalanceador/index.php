<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip_cliente = $_SERVER['REMOTE_ADDR']; 
        $ip_servidor = $_SERVER['SERVER_ADDR'];
        $ip_remota = $_SERVER['HTTP_X_REAL_IP']
    ?>
    <h1>IP del cliente: <?php echo $ip_cliente; ?></h1>
    <h1>IP del cliente remoto: <?php echo $ip_remota; ?></h1>
    <h2>IP del servidor: <?php echo $ip_servidor; ?></h2>
</body>
</html>