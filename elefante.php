<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="#" method="post">
    <label for="">Informe o numero de elefante:</label>
    <input type="number" name = "elefante">
    <input type="submit" value=" Enviar" name="enviar">
</form>

<?php
if(isset($_POST['enviar'])) {
    for($i = 1; $i<= $_POST['elefante'];  $i++){
        if(($i%2) !=0 ){
            if ($i > 1){
                echo $i . " elefante incomoda muita gente";
            }else{
                echo $i . " elefante incomoda muita gente";
            }
        }else{
             echo $i ."elefantes";
                for($e =1; $e <= $i; $e++){
                    echo "incomodam";
                }
                echo "muito mais<br>";
            }

        }


    }



?>
</body>
</html>




