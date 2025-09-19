/** ENUNCIADO
Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. 
Un número primo es aquel que solo es divisible por 1 y por sí mismo.

*/

<?php 
//funcion para determinar si un numero es primo
function esPrimo($num) {
    // un numero menor o igual 1 no puede ser primo
    if($num <= 1){
        return false;
    }
    
    //verificar si el numero tiene divisores distintos de 1 y el mismo
    //si encontramos al menos un divisor exacto, el numero no es primo
    for ($i=2; $i < $num ; $i++) { 
        if($num % $i == 0){
            return false;
        }
    }
    //si no se encontro ningun divisor, entonces es primo
    return true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo</title>
</head>
<body>
    <h1>Comprobar si un numero es primo</h1>

    <form method="post">
        <label>Escribe un numero:</label>
        <input type="number" name="numero" id="numero">
        <button type="submit">Verificar</button>
    </form>

    <?php
        //verificamos si el usuario envio un numero desde el formulario
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];//guardamos el numero enviado

            //Verificamos la funcion para erificar si es primo o no
            if(esPrimo($numero)){
                echo "<p style='color:green;'> ✔ El numero $numero es primo</p>";
            }else{
                echo "<p style='color:red;'> ❌ El numero $numero no es primo</p>";
            }
        }
    ?>
</body>
</html>