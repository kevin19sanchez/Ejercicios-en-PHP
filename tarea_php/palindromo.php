/***
Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una 
cadena de texto dada es un palíndromo. Un palíndromo es una palabra, 
frase o secuencia que se lee igual en ambas direcciones.
*/

<?php
    //funcion para verificar si una cadena es palindromo
    function esPalindromo($frase){
        //convertimos todo a minuscula para evitar problemas con mayusculas
        $frase = strtolower($frase);

        //eliminamos espacios al inicio y al final
        $frase = trim($frase);

        //inertimos la cadena
        $textoInvertido = strrev($frase);

        //comprobamos el texto original con el invertido
        //si son iguales, es un palindromo
        return $frase === $textoInvertido;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <h1>Verificar si la palabra es palindromo</h1>

    <form method="post">
        <label>Escribir la palabra:</label>
        <input type="text" name="texto" id="texto">
        <button type="submit">Verificar</button>
    </form>

    <?php
        //verificamo si el usuario envio algun texto
        if(isset($_POST['texto'])){
            $palabra = $_POST['texto'];//guardamos el texto ingresado

            //comprobramos si es palindromo usando la funcion
            if(esPalindromo($palabra)){
                echo "$palabra es un palindromo ✔ <br>";
            }else{
                echo "$palabra no es un palindromo ❌ <br>";
            }
        }
    ?>
</body>
</html>