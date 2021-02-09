<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="reto2.php" method="post">
        <input name="Numero"/>
        <input type="submit"/>
    </form>
</body>
</html>

<?php
    $numero = $_POST['Numero'];

    function mostrarMultiplicacion($numero){
        for($i = 0; $i <= 10; $i++){
            echo'<tr>
                    <td>' .$numero. 'x' .$i. '</td>
                    <td>' .$numero*$i. '</td>
                </tr>';
        }
    }

    function factorizarNumero($numero){
        $fatorial = 1;
        for ($f = $numero; $f >= 1; $f--) {
            $factorial *= $f;
        }
        mostrarFactorial($numero, $factorial);
    }

    function mostrarFactorial($numero, $factorialResultado){
        echo'<tr>
                <td>' .$numero. '</td>
                <td>' .$factorialResultado. '</td>
            </tr>';
    }
?>
<table border="1">
    <?php
        mostrarFactorial($numeroPost);
        factorizarNumero($numeroPost);
        ?>
</table>