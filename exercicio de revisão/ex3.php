<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>ultimo</title>
    </head>
    <body>
        <div >
            <h2>Insira os numeros separados por vi</h2>
            <form method="POST" action="">>
                <label for="numero 1">numero1</label>
                <input type="number" id="num1" name="num1" >
                <label for="numero 2">numero2</label>
                <input type="number" id="num2" name="num2" >
                <label for="numero 3">numero3</label>
                <input type="number" id="num3" name="num3" >
                <label for="numero 4">numero4</label>
                <input type="number" id="num4" name="num4" >
                <button type="submit">calcular</button>
            </form>
        </div>
    </body>
</html><?php
$arr = array ('81', '24', '36', '44', '57');
echo end($arr);
?>