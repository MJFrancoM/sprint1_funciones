<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Funciones_ Ejercicio 4</title>
</head>
<body>
    <?php 
        $cuenta=array(); 
        $finalCuenta=10;    
        echo amagatall($finalCuenta);
   
        function amagatall($finalCuenta){
            
            for ($i=1; $i <= $finalCuenta; $i++) { 
                if ($i % 2 == 0) {
                    $cuenta[]=$i;
                }
            }
            foreach($cuenta as $elemento){
                echo $elemento . "</br>";
            }
        }
    
    
    
    ?>
</body>
</html>