<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Alterar Empresa</title>
</head>
<body>

<header>
    <h1>Alterar Empresa</h1>
    <nav>
        <ul>
            <li><a href="../aposlogin.php">Menu</a></li>
        </ul>
    </nav>
</header>

<div class="main-content">
    <?php
    include_once "../factory/conexao.php";
    $pesquisa = $_POST["cxpesquisacomercio"];
    $consulta = "SELECT * FROM tbcormecial WHERE comercio = '$pesquisa'";
    $executar = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($executar);
    ?>
    <form action="walterarcomercio.php" method="POST">

    <h3>Altere os dados da sua empresa aqui:</h3></br>
        <input type="hidden" name="cxcod" value="<?php echo $linha["cod"]; ?>">
        Nome:<br>
        <input type="text" name="cxnome" value="<?php echo $linha["nome"]; ?>"><br>
        Comércio:<br>
        <input type="text" name="cxcomercio" value="<?php echo $linha["comercio"]; ?>"><br>
        Telefone:<br>
        <input type="text" name="cxtelefone" value="<?php echo $linha["telefone"]; ?>"><br>
        WhatsApp:<br>
        <input type="text" name="cxwhats" value="<?php echo $linha["whats"]; ?>"><br>
        
        <input type="submit" value="Alterar">
    </form>
</div>

<footer>
    <p>&copy; 2024 <br>Bruna Luiza Turma A</p>
</footer>

</body>
</html>
