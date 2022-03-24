<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Funciones_ Ejercicio 5</title>
</head>
<body>
    <?php 
        $nota=98;
        echo grado($nota);

        function grado($nota){
            $grado="";
            if($nota>=60 && $nota<=100){
                $grado="Primera División";
            }elseif ($nota>=45 && $nota<=59) {
                $grado="Segunda División";
            }elseif ($nota>=33 && $nota<=44) {
                $grado="Tercera División";
            }elseif ($nota>0 && $nota<=32) {
                $grado="Has reprobado";
            }else{
                $grado="Nota introducida incorrecta";
            }
            return $grado;

        }


    
    
    
    ?>
    
</body>
</html>