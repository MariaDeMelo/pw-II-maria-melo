<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>chute</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros separados por vigulas</h2>
            <form method="POST" action="">
                <label for="numero 1">numeros</label>
                <input type="text" id="array" name="array"placeholder="ex:0,0,0,0," >
                <label for="numero 1">quantos numeros vc escreveu</label>
                <input type="number" id="tentativa" name="tentativa" >
                <button type="submit">ver</button>
            </form>
        </div>
    </body>
</html><?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['array'];
        $array = explode(',', $num);
        $array = array_map('trim', $array);
        $chute = (int)$_POST['tentativa'];

        function ver($array) {
            if (empty($array)) {
                return 0; 
            }
            return count($array); 
        }

        $resultado = ver($array);
        if ($resultado == $chute) {
            echo "<p>voce acertou</p>";
        }else {
            echo "voce errou a quantidade é $resultado";
        }
    }
    ?>