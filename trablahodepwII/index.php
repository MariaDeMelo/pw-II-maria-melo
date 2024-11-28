<?php
$serve = "127.0.0.1";
$user = "root";
$password = "68146956m"; // Sua senha
$dbname = "projeto";
$connect = mysqli_connect($serve, $user, $password, $dbname);

if (!$connect) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Adicionar notícia
if (isset($_POST["adicionar"])) {
    $titulo = mysqli_real_escape_string($connect, $_POST["titulo"]);
    $noticias_reportagens = mysqli_real_escape_string($connect, $_POST["reportagem"]);
    $imagem_noticia = mysqli_real_escape_string($connect, $_POST["img"]);
    $titulo_imagem = mysqli_real_escape_string($connect, $_POST["img_nome"]);

    if (empty($titulo) || empty($noticias_reportagens) || empty($imagem_noticia) || empty($titulo_imagem)) {
        echo "<p>Preencha todos os campos!</p>";
    } else {
        $adicionar = "INSERT INTO noticias (titulo, noticias_reportagens, imagem_noticia, titulo_imagem) 
                      VALUES ('$titulo', '$noticias_reportagens', '$imagem_noticia', '$titulo_imagem')";
        if (mysqli_query($connect, $adicionar)) {
            echo "<p>Notícia adicionada com sucesso!</p>";
        } else {
            echo "<p>Erro ao adicionar notícia: " . mysqli_error($connect) . "</p>";
        }
    }
}

// Editar notícia
if (isset($_POST["editar"])) {
    $id = intval($_POST["id_noticias"]);
    $titulo = mysqli_real_escape_string($connect, $_POST["titulo"]);
    $noticias_reportagens = mysqli_real_escape_string($connect, $_POST["reportagem"]);
    $imagem_noticia = mysqli_real_escape_string($connect, $_POST["img"]);
    $titulo_imagem = mysqli_real_escape_string($connect, $_POST["img_nome"]);

    if (empty($titulo) || empty($noticias_reportagens) || empty($imagem_noticia) || empty($titulo_imagem)) {
        echo "<p>Preencha todos os campos!</p>";
    } else {
        $editar = "UPDATE noticias SET 
                   titulo='$titulo', 
                   noticias_reportagens='$noticias_reportagens',
                   imagem_noticia='$imagem_noticia', 
                   titulo_imagem='$titulo_imagem',
                   WHERE id=$id;";
        if (mysqli_query($connect, $editar)) {
            echo "<p>Notícia atualizada com sucesso!</p>";
        } else {
            echo "<p>Erro ao atualizar notícia: " . mysqli_error($connect) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Notícias</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Notícias</a><br>
        <a href="quemsomos.html">Quem somos?</a><br>
        <a href="perfil.html">Perfil</a><br>
    </nav>

    <!-- Exibição das Notícias -->
    <section id="noticiasid" class="noticiasclass">
        <?php
        $exibedados = "SELECT * FROM noticias";
        $dadosquery = mysqli_query($connect, $exibedados);
        if ($dadosquery && mysqli_num_rows($dadosquery) > 0) {
            while ($dados = mysqli_fetch_array($dadosquery)) {
                ?>
                <div class="noticiasclass" id="noticiasid">
                    <div class="ntclass" id="ntcid">
                        
                        <img src="<?php echo $dados["imagem_noticia"]; ?>" alt="<?php echo $dados["titulo_imagem"]; ?>" width="300" height="200">
                        <h3><?php echo $dados["titulo"]; ?></h3>
                        <p><?php echo $dados["noticias_reportagens"]; ?></p>
                    </div>
                    <div class="acoes">
                        <!-- Botão de Excluir -->
                        <form method="POST">
                            <button class="lixeiraclass" type="submit" name="excluir">
                                <img src="imagens/lixeira-de-reciclagem.png" alt="Excluir" width="25" height="25">
                            </button>
                        </form>

                        <button  class="editarclass"
                            onclick="openModalEditar()">
                            <img src="imagens/arquivo-e-pasta.png" alt="Editar" width="25" height="25">
                        </button>

                    </div>
                </div>
                <?php
            }
        }
        ?>
    </section>

    <div div class="adicionarclass" id="adicionarid">
        <button class="addbtnclass" id="btncanceladd"onclick="openaModalAdd()">+</button>
    </div>

    <div class="modal" id="modalAdicionar">
        <div class="modal_info">
            <button class="close_modal" onclick="closeModalAdd()">X</button>
            <form class="informacaoadd" id="informacaoadd" method="POST">
                <label for="m-titulo">Titulo</label>
                <input id="m-titulo" type="text" required />

                <label for="m-reportagem">Reportagem</label>
                <input id="m-reportagem" type="text" required />

                <label for="m-img">Imagem (ex.: "imagens/imagem.png")</label>
                <input id="m-img" type="text" required />

                <label for="m-img-nome">Nome da imagem</label>

                <input id="m-img-nome" type="text" required />
                <button id="salvarCrud" class="salvar crud" name="adicionar" type="submit">Salvar</button>
            </form>        
        </div>
    </div>

    
    <div id="modalEditar" class="modal">
        <div class="modalmodal_info">
            <button class="close_modal" onclick="closeModalEditar()">X</button>
            <form method="POST">
                <input type="hidden" id="edit-id" name="id_noticias">
                
                <label for="edit-titulo">Título</label>
                <input id="edit-titulo" name="titulo" type="text" required>
                
                <label for="edit-reportagem">Reportagem</label>
                <input id="edit-reportagem" name="reportagem" type="text" required>
                
                <label for="edit-img">Imagem</label>
                <input id="edit-img" name="img" type="text" required>
                
                <label for="edit-img-nome">Nome da Imagem</label>
                <input id="edit-img-nome" name="img_nome" type="text" required>
                
                <button type="submit" name="editar">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
        <script src="script.js"></script>

    </body>
</html>
