<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>menor numero</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros</h2>
            <form method="POST" action="">
                <label for="numero">numero</label>
                <input type="number" id="num1" name="num1"><br>
                <label for="numero 2">numero</label>
                <input type="number" id="num2" name="num2"><br>
                <button type="submit">menor</button>
            </form>
            <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nume1 = $_POST['num1'];
                    $nume2 = $_POST['num2'];

                
                function menor($nume1, $nume2) {
                    if ($nume1 > $nume2) {
                        echo "<p>O menor número é $nume2</p>";
                    } else if ($nume1 < $nume2) {
                        echo "<p>O menor número é $nume1</p>";
                    } else {
                        echo "<p>Os números são iguais</p>";
                    }
                }
                
                    menor($nume1, $nume2);
                }
            ?>
    </body>
</html>