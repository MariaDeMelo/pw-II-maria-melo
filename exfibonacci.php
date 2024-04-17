<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Exercício de fibonacci</title>
</head>
<body>
    <?php
        $resultado = 0;
        $penultimo = 0;
        $ultimo = 1;

        while ($resultado < 27) {
            echo "<p>$resultado</p>";
            $penultimo=$ultimo;
            $ultimo=$resultado;
            $resultado=$ultimo+$penultimo;
          }
    ?>
</body>
</html>