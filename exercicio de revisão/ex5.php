<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>pernas</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros de animas que voce tem</h2>
            <form method="POST" action="">
                <label for="galinha">numero de galinha</label>
                <input type="number" id="galinha" name="galinha"><br>
                <label for="numero 1">numero de vaca</label>
                <input type="number" id="vaca" name="vaca"><br>
                <label for="numero 1">numero de porco</label>
                <input type="number" id="porco" name="porco" ><br>
                <p>para saber o numero de pernas aperta em calcular</p>
                <button type="submit">calcular</button>
            </form>
            <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $galinha = $_POST['galinha'];
                    $vaca = $_POST['vaca'];
                    $porco = $_POST['porco'];
                    calcular($galinha, $vaca,$porco);
                }
                
                function calcular($galinha, $vaca,$porco) {
                    $resultado = ($galinha*2)+($vaca+$porco)*4;
                    echo "<p>O total de pernas é: $resultado</p>";
                }
            ?>
        </div>
    </body>
</html>