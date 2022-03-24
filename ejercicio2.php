<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Funciones_ Ejercicio 2</title>
</head>
<body>
    <?php 

        $cuenta=array(); //Creo un array vacio y lo voy llenando con un bucle for, que agrega elementos si cumple la condición de que sea par.
    
        echo amagatall();
   
        function amagatall(){
            
            for ($i=1; $i <= 10; $i++) { 
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