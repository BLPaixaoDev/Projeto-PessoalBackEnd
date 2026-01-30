<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Alterar Amigo</title>
</head>
<body>

<header>
    <h1>Alterar Amigo</h1>
    <nav>
        <ul>
            <li><a href="../aposlogin.php">Menu</a></li>
        </ul>
    </nav>
</header>

<div class="main-content">
    <?php
    include_once "../factory/conexao.php";
    $pesquisa = $_POST["cxpesquisaamigo"];
    $consulta = "SELECT * FROM tbamigos WHERE amigo = '$pesquisa'";
    $executar = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_array($executar);
    ?>
    <form action="yalteraramigo.php" method="POST">
        <input type="hidden" name="cxcod" value="<?php echo $linha["cod"]; ?>">
        Nome:<br>
        <input type="text" name="cxamigo" value="<?php echo $linha["amigo"]; ?>"><br>
        Email:<br>
        <input type="email" name="cxemail" value="<?php echo $linha["email"]; ?>"><br>
        Telefone:<br>
        <input type="text" name="cxtelefone" value="<?php echo $linha["telefone"]; ?>"><br>
        WhatsApp:<br>
        <input type="text" name="cxwhats" value="<?php echo $linha["whats"]; ?>"><br>
        Data de Nascimento:<br>
        <input type="date" name="cxnascimento" value="<?php echo $linha["datanasc"]; ?>"><br>
        
        <input type="submit" value="Alterar">
    </form>
</div>

<footer>
    <p>&copy; 2024 <br>Bruna Luiza Turma A</p>
</footer>

</body>
</html>
