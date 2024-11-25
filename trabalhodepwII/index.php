<?php
$_SERVER="127.0.0.1";
$user = "root";
$password="";//coloca a senha
$dbname = "projeto";
if($connect = mysqli_connect($server,$user,$password,$dbname)){
    echo"Conexão realizada";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <a href="index.html">noticias </a><br>
    <a href="quemsomos.html"> quem somos? </a><br><!-- aq seria a parte  de cima onde em as barras-->
    <a href="perfil.html"> perfil </a><br>
    <div class="noticiasclass" id="noticiasid">
        <div class="ntcclass" id="ntcid">
            <a href="azulclarinho.html">
                 <img src="imagens/azulclarinho.jpg" alt="azul clarinho"  width="300" height="200";>
                 <h3>azul clarinho</h3>
            </a>
            <div class="btncrudclass" id="btncrudid">
                <button class="voltarclass" id="">
                    <img src="imagens/de-volta.png" alt="voltar" width="25" height="25">
                </button>
                <button class="lixeiraclass" id="">
                    <img src="imagens/lixeira-de-reciclagem.png" alt="lixeira" width="25" height="25">
                </button>
                <button class="editarclass" id="">
                    <img src="imagens/arquivo-e-pasta.png" alt="editar" width="25" height="25">
                </button>
            </div>
        </div>
        <div class="ntcclass" id="ntcid">
            <a href="azulclaro.html">
                 <img src="imagens/azulclaro.jpeg" alt="azul claro" width="300" height="200">
                 <h3>azul claro</h3>
            </a>
            <div class="btncrudclass" id="btncrudid">
                <button class="voltarclass" id="">
                    <img src="imagens/de-volta.png" alt="voltar" width="25" height="25">
                </button>
                <button class="lixeiraclass" id="">
                    <img src="imagens/lixeira-de-reciclagem.png" alt="lixeira" width="25" height="25">
                </button>
                <button class="editarclass" id="">
                    <img src="imagens/arquivo-e-pasta.png" alt="editar" width="25" height="25">
                </button>
            </div>
        </div>
        <div class="ntcclass" id="ntcid">
            <a href="azulmarinho.html">
                 <img src="imagens/azulmarinho.jpg" alt="azul marinho" width="300" height="200">
                 <h3>azul marinho</h3>
            </a>
            <div class="btncrudclass" id="btncrudid">
                <button class="voltarclass" id="">
                    <img src="imagens/de-volta.png" alt="voltar" width="25" height="25">
                </button>
                <button class="lixeiraclass" id="">
                    <img src="imagens/lixeira-de-reciclagem.png" alt="lixeira" width="25" height="25">
                </button>
                <button class="editarclass" id="">
                    <img src="imagens/arquivo-e-pasta.png" alt="editar" width="25" height="25">
                </button>
            </div>
        </div>
        <div class="ntcclass" id="ntcid">
            <a href="azulescuro.html"> 
                <img src="imagens/azulescuro.jpg" alt="azul escuro" width="300" height="200">
                <h3>azul escuro</h3>
            </a>
            <div class="btncrudclass" id="btncrudid">
                <button class="voltarclass" id="">
                    <img src="imagens/de-volta.png" alt="voltar" width="25" height="25">
                </button>
                <button class="lixeiraclass" id="">
                    <img src="imagens/lixeira-de-reciclagem.png" alt="lixeira" width="25" height="25">
                </button>
                <button class="editarclass" id="">
                    <img src="imagens/arquivo-e-pasta.png" alt="editar" width="25" height="25">
                </button>
            </div>
        </div>
    </div>
    <div class="administrador" id="administrador">
        <p>agora voce e adm voce pode movificar,voltar para a verção antica,criar novas postagens e remover</p>
    </div>

    <div class="adicionarclass" id="adicionarid">
        <button id="addbtnid" class="addbtnclass">+</button>
    </div>

</body>
</html>