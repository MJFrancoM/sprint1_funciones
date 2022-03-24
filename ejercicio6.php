<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Funciones_ Ejercicio 6</title>
</head>
<body>
    <?php 
        $probabilidad=rand(0,100);

        $bitten=isBitten($probabilidad);

        echo mensaje($bitten);

        function isBitten($probabilidad){
            $bitten=false;
            if($probabilidad>50){
                $bitten=true;
            }
            return $bitten;
               
        }

        function mensaje($bitten){
            if($bitten){
                $mensaje="Charlie está mordiendo su dedo en este momento";
            }else{
                $mensaje="Charlie no está mordiendo su dedo en este momento";
            }
            return $mensaje;
        }
    
    ?>
    
</body>
</html>