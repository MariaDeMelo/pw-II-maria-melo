<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>menor</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros separados por vigulas</h2>
            <form method="POST" action="">
                <label for="numero 1">numeros</label>
                <input type="text" id="array" name="array"placeholder="ex:0,0,0,0," >
                <button type="submit">menor</button>
            </form>
        </div>
    </body>
</html><?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['array'];
        $array = explode(',', $num);
        $array = array_map('trim', $array);
        $array = array_map('floatval', $array);

        function menor($array) {
            if (empty($array)) {
                return null; 
            }
            return min($array); 
        }

        $resultado = menor($array);
        if ($resultado !== null) {
            echo "<p>O menor numero foi: $resultado</p>";
        } else {
            echo "<p>insira um número válido</p>";
        }
    }
    ?>
</body>
</html>
