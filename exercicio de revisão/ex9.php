<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>natal</title>
    </head>
    <body>
        <div >
            <h2>digite uma data</h2>
            <form method="POST" action="">
                <label for="ano">ano</label>
                <input type="number" id="ano" name="ano"><br>
                <label for="mes">mes</label>
                <input type="number" id="mes" name="mes"><br>
                <label for="dia">dia</label>
                <input type="number" id="dia" name="dia" ><br>
                <button type="submit">natal</button>
            </form>
            <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $ano = $_POST['ano'];
                    $mes = $_POST['mes'];
                    $dia = $_POST['dia'];
                    natal($ano, $mes, $dia);
                }
                
                function natal($ano, $mes,$dia) {
                    if($mes==12 && $dia==25){
                        echo"<p>é natal</p>";
                    }else{
                        echo"<p>não é natal</p>";
                    }
                }
            ?>
        </div>
    </body>
</html>