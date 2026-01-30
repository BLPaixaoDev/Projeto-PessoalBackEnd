<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <header id="cabecalho">
        <h1>Login</h1>
        <nav>
            <ul>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </nav>
    </header>

    <section id="cxprincipal">
        <figure id="cxcadeado">
            <img src="img/foto.png" alt="Cadeado" style="width: 150px; height: 161px;">
        </figure>

        <header id="cxlogin">
            <h1>Login</h1>
            <form action="forms/processar-login.php" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
                <label for="cxemail">Email:</label><br>
                <input type="email" name="cxemail" id="cxemail" required><br>
                <label for="cxsenha">Senha:</label><br>
                <input type="password" name="cxsenha" id="cxsenha" required><br>
                <br>
                <input type="submit" value="Acessar">
                <br><br><br>
                <a href="telacaduser.php">Não tem conta? Crie uma aqui!</a>

                <?php if (isset($_GET['erro'])): ?>
                    <p style="color: red;">
                        <?php
                        if ($_GET['erro'] == 1) {
                            echo "Email ou senha incorretos. Por favor, tente novamente.";
                        } elseif ($_GET['erro'] == 2) {
                            echo "Ocorreu um erro interno. Por favor, tente novamente mais tarde.";
                        }
                        ?>
                    </p>
                <?php endif; ?>
            </form>
        </header>


        
    </section>

    <footer>
        <p>&copy; 2024<br>Bruna Luiza Turma A</p>
    </footer>
</body>
</html>
