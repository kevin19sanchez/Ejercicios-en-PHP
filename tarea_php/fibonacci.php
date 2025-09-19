/** ENUNCIADO
Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n 
como parámetro y genere los primeros n términos de la serie Fibonacci. 
La serie comienza con 0 y 1, y cada término subsiguiente es la suma de 
los dos anteriores.

*/
<?php 
//funcion fibonacci recipe un parametro n
function generarFibonacci($n){
    //coprobamos si n es menor que 2, significa que es 0 o 1
    //en este caso devolvemos directamente el valor de n
    if($n < 2){
        //se devuelve el parametro
        return $n;
    }else{
        //devolvemos la suma de la propia llamada de la funcion
        //con n-1 como argumento más la propia llamada de la funcion
        // como argumento de n-2 y esto sumaria los 2 terminos anteriores
        return generarFibonacci($n-1) + generarFibonacci($n-2);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie Fibonacci</title>
</head>
<body>
    <h2>Serie Fibonacci</h2>

    <form method="post">
        <label for="cantidad">Ingrese la cantidad de terminos:</label>
        <input type="number" name="cantidad" id="cantidad">
        <button type="submit">Generar</button>
    </form>
    <?php 
        //verificamos si el usuario envio el formulario
        if(isset($_POST['cantidad'])){
            $cantidad = $_POST['cantidad']; // guadamos el valor ingresado

            echo "<p>Los primeros $cantidad términos son:</p>";
            echo "<ul>";

            //gerneremos e imprimimos cada termino de la serie fibonacci
            for ($i=0; $i < $cantidad; $i++) {
                echo "<li>" . generarFibonacci($i) . "</li>";
            }

            echo "</ul>";
        }
    ?>
</body>
</html>