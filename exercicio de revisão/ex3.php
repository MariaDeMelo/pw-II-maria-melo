<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>ultimo</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros separados por vigulas</h2>
            <form method="POST" action="">
                <label for="numero 1">numeros</label>
                <input type="text" id="array" name="array"placeholder="ex:0,0,0,0," >
                <button type="submit">ultimo</button>
            </form>
        </div>
    </body>
</html><?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['array'];
        $array = explode(',', $num);
        $array = array_map('trim', $array);

        function ultimo($array) {
            if (empty($array)) {
                return null; 
            }
            return end($array); 
        }

        $resultado = ultimo($array);
        if ($resultado !== null) {
            echo "<p>O último numero foi: $resultado</p>";
        } else {
            echo "<p>insiraum número válido.</p>";
        }
    }
    ?>
    