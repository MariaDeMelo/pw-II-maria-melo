<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>triangulo</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros</h2>
            <form method="POST" action="">
                <div class="mb-4">
                    <label for="numero 1">Escreva a base</label>
                    <input type="number" id="base" name="base" >
                </div>
                
                <div class="mb-4">
                    <label for="numero 1">escreva a altura</label>
                    <input type="number" id="altura" name="altura" >
                </div>
                <button type="submit">calcular</button>
            </form>
            <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    calcular($base, $altura);
                }
                
                function calcular($base, $altura) {
                    $resultado = ($base * $altura) / 2;
                    echo "<p>O resultado da area do triangulo é: $resultado</p>";
                }
            ?>
        </div>
    </body>
</html>