<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>email</title>
    </head>
    <body>
            <h2>digite o seu email</h2>
            <form method="POST" action="">
                <label for="email">email</label>
                <input type="email" id="email" name="email"><br>
                <button type="submit">email</button>
            </form>
            <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $email = $_POST['email'];
                    email($email);
                }
                
                function email($email) {
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                      echo("$email é valido");
                    } else {
                      echo("$email não é valido");
                    }
                }
            ?>
    </body>
</html>