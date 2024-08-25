<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>numero faltando</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros separados por vigulas,de 1 ate o 10 esquecendo algum numero</h2>
            <form method="POST" action="">
                <label for="numero 1">numeros</label>
                <input type="text" id="array" name="array"placeholder="ex:0,0,0,0," >
                <button type="submit">faltando</button>
            </form>
        </div>
    </body>
</html><?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['array'];
        $array = explode(',', $num);
        $array = array_map('trim', $array);
        $array = array_map('intval', $array);
        $compara=range(1,10);
        $comparado=array($array);

        function faltando($compara,$comparado) {
            return array_diff($compara,$comparado); 
        }

        $resultado = faltando($compara,$array);

        if (!empty($resultado)) {
            echo "<p>O numero que esta faltando é  " . implode(', ', $resultado) . "</p>";
        } else {
            echo "todos os numeros estao presentes";
        }
    }
    ?>
</body>
</html>
