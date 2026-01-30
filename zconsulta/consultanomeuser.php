<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleuser.css">
    <title>Consulta Usuario</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body>
<?php 
    include_once "../factory/conexao.php";
    if(isset($_POST["cxpesquisa"])) {
        $nome = $_POST["cxpesquisa"];
        $consultar = "SELECT * FROM tbusuario WHERE nome = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        
  
        if($linha) {
    ?>

       

<div class="container">
<h2>Usuário Consultado:</h2>
    <section>
    <label for="">Nome:</label>
    <input type="text" name="" value="<?php echo $linha ['nome'] ?>"readonly/>

    <label for="">E-mail:</label>
    <input type="e-mail" name="" value="<?php echo $linha ['email'] ?>"readonly/>

    <label for="">Senha:</label>
    <input type="password" name="" value="<?php echo $linha ['senha'] ?>"readonly/>

    <p>Deseja alterar seus dados?
            <a href="../zalterar/xtelaconsultanomeuser.php">Alterar</a> 
        </p>

</section>
</div>

<?php 
        } else {
            echo "<div class='mensagem'><h2>Usuário não encontrado. Verifique o nome e tente novamente.</h2></div>";
        }
    }
    ?>

</body>
</html>