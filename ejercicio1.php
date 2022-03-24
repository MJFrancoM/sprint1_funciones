<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Funciones_ Ejercicio 1</title>
</head>
<body>
    <?php 
    
        $miNumero = 34;

        echo mensaje($miNumero);

        function mensaje($miNumero){
    
            if($miNumero % 2 == 0){
                $mensaje="El número es par";
            }else {
                $mensaje="El número no es par";
            }
            return $mensaje;

        }
    ?>
</body>
</html>