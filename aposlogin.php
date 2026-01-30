<?php
session_start();
if (!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
    header("location:login.php");
    exit();
}

$logado = $_SESSION['login'];
$caminhoDaImagem = isset($_SESSION["caminhoDaImagem"]) ? $_SESSION["caminhoDaImagem"] : '';
$nomeUsuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : '';
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Menu</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/aposlogin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .user-image {
            width: 40px; /* Ajuste o tamanho conforme necessário */
            height: 40px; /* Ajuste o tamanho conforme necessário */
            border-radius: 50%; /* Torna a imagem redonda */
            object-fit: cover; /* Garante que a imagem cubra todo o espaço do elemento */
        }
    </style>
</head>
<body>

<header id="banner">
    <div class="header-content">
        <img src="img/logo.png" alt="Logo" class="logo">
        <nav class="nav-links">
            <a href="#sobre-nos" class="nav-link"><i class="fas fa-info-circle"></i> Sobre Nós</a>
            <a href="#recursos" class="nav-link"><i class="fas fa-tools"></i> Recursos do Site</a>

            <?php if ($caminhoDaImagem && $nomeUsuario): ?>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-image" src="usuarios/<?php echo htmlspecialchars($caminhoDaImagem); ?>" alt="Imagem do Usuário">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header"><?php echo htmlspecialchars($nomeUsuario); ?></h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php" onclick="return confirm('Tem certeza que deseja sair?')"><i class="fas fa-sign-out-alt"></i> Sair</a>
                        <a class="dropdown-item" href="zalterar/xtelaexibirdadosuser.php?nome=<?php echo urlencode($nomeUsuario); ?>"><i class="fas fa-user-edit"></i> Alterar Dados</a>
                        <a class="dropdown-item" href="zdelete/excluiruser.php" onclick="return confirm('Tem certeza que deseja deletar sua conta?')"><i class="fas fa-user-slash"></i> Deletar Conta</a>
                    </div>
                </div>
            <?php else: ?>
                <a href="login.php"><img class="user-image" src="assets/img/usericon.png" alt="Ícone de Login"></a>
            <?php endif; ?>
        </nav>
    </div>
</header>


<section id="cadastro-consulta">
    <div id="cxprincipal">
        <!-- Seção de Cadastro -->
        <div class="cadastro-consulta-box">
            <h2>Cadastre seus amigos ou sua empresa!</h2>
            <div class="cadastro-items">
                <div id="cxamigo" class="cadastro-item">
                    <h3>Cadastre Amigos</h3>
                    <a href="telacadamigos.php">
                        <img src="img/amigues.png" alt="Cadastre Amigos">
                    </a>
                </div>
                <div id="cxcomercio" class="cadastro-item">
                    <h3>Cadastre seu Comércio</h3>
                    <a href="telacadcomercial.php">
                        <img src="img/cadcomer.png" alt="Cadastre Comércio">
                    </a>
                </div>
            </div>
        </div>

        <!-- Seção de Consulta -->
        <div class="cadastro-consulta-box">
            <h2>Consulte seus dados existentes:</h2>
            <div class="consulta-items">
                <div id="cxconsultaamigo" class="consulta-item">
                    <h3>Consulte Amigo</h3>
                    <a href="telacadamigos.php">
                        <img src="img/amigos.jpg" alt="Consulta Amigo">
                    </a>
                </div>
                <div id="cxconsultacomercio" class="consulta-item">
                    <h3>Consulte Comércio</h3>
                    <a href="telacadcomercial.php">
                        <img src="img/comercio.png" alt="Consulta Comércio">
                    </a>
                </div>
                <div id="cxconsultauser" class="consulta-item">
                    <h3>Consulte Usuário</h3>
                    <a href="telacaduser.php#">
                        <img src="img/cadastro.jpeg" alt="Consulta Usuário">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


    <div id="sobre-nos">
            <h2>Sobre Nós</h2>
            <p>Bem-vindo ao GAME CONNECT! Aqui você pode se conectar com amigos, cadastrar empresas e muito mais. Nosso objetivo é fornecer uma plataforma fácil de usar e segura para todos os seus interesses em jogos.</p>
        </div>

        <div id="recursos">
            <h2>Recursos do Site</h2>
            <ul>
                <li>Conexão com amigos gamers</li>
                <li>Cadastro e avaliação de empresas</li>
                <li>Feed de atividades e notificações</li>
                <li>Integração com redes sociais</li>
            </ul>
        </div>

        <div id="seguranca">
            <h2>Segurança</h2>
            <p>Levamos sua segurança a sério. Todos os dados são criptografados e seguimos as melhores práticas de segurança da informação.</p>
        </div>

<footer id="rodape">
    <div class="footer-content">
        <div class="left">
            <h2>Bruna Luiza Paixão</h2>
        </div>
        <div class="right">
            <p>GU3024628 &copy; 3°INFO</p>
        </div>
        <p>Todos os direitos reservados &copy; 2024</p>
    </div>
</footer>

<script src="js/script.js"></script>

</body>
</html>
