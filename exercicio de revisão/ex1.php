
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>soma</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros</h2>
            <form method="POST" action="">
                <div class="mb-4">
                    <label for="numero 1">Escreva um numero</label>
                    <input type="number" id="num1" name="num1" >
                </div>
                
                <div class="mb-4">
                    <label for="numero 2">escreva um outro numero</label>
                    <input type="number" id="num2" name="num2" >
                </div>
                <button type="submit">somar</button>
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    soma($num1, $num2);
                }
                
                function soma($num1, $num2) {
                    $resultado=$num1+$num2;
                    echo "<p>Resultado da soma: $resultado</p>";
                }
            ?>
        </div>
    </body>
</html>