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
    <label for="">Informe o numero de patinhos:</label>
    <input type="number" name = "patinho">
    <input type="submit" value=" Enviar" name="enviar">
</form>

<?php
if(isset($_POST['enviar'])) {
    for($i = $_POST['patinho']; $i >= 1; $i--){
        echo $i." patinho foram passear<br>";
        echo "alem das montanhas para brincar<br>";
        echo "a mamae patinha fez quá quá quá";
        if($i ==1){
            echo "mas nenhum patinho voltou de lá<br>";

        }else{
            echo "mas somente".($i-1). "patinhos voltaram de lá <br><br>";
        }
    }

}

?>

</body>
</html>



