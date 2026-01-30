<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <title>Cadastro Usuário</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <script>
    function toggleForms() {
        var cadastroForm = document.getElementById("cadastroForm");
        var consultaForm = document.getElementById("consultaForm");

        if (cadastroForm.style.display === "block") {
            cadastroForm.style.display = "none";
            consultaForm.style.display = "block"; 
        } else {
            cadastroForm.style.display = "block"; 
            consultaForm.style.display = "none";
        }
    }
</script>

</head>


<body>

<header>
        <h1>Cadastro Usuário</h1>
        <nav>
            <ul>
                <li><a href="menu.php"> Menu</a></li>
                <li><a href="aposlogin.php"> Login</a></li>
            </ul>
         
        </nav>
    </header>




<section>
    <form id="cadastroForm" action="zinserir/inseriruser.php" method="POST" style="display: block;" enctype="multipart/form-data">
    
    <h2>Cadastre-se</h2>

         Nome:
        <input type="text" name="cxnome" placeholder="Exemplo: Seu nome"/><br/>
         Email:
        <input type="e-mail" name="cxemail" placeholder="Exemplo: user@gmail.com"/><br/>
         Senha:
        <input type="password" name="cxsenha" placeholder="Exemplo: SenhaSegura123"/><br/>
        Escolha uma imagem (formatos aceitos: JPG, JPEG, PNG):</br></br>
        <input type="file" name="imagem" accept=".jpg, .jpeg, .png" id="imagem" placeholder="Envie uma imagem"/><br/>
        </br>
        <input type="submit" value="Gravar">
        <p>Deseja consultar seu cadastro?
            <a href="#" onclick="toggleForms()" style="color: black;">Busque-o</a>
        </p>
    </form>



                    <form id="consultaForm" action="zconsulta/consultanomeuser.php" method="POST" style="display: none;">
                    <h2>Consulte</h2>
                        <div class="container_form__itens">
                            <div class="container_form_itens__inputs">
                                <label for="">Digite o nome completo do usuário:</label></br></br>
                                <input type="text" name="cxpesquisa" id=""/>
                            </div>

                                <input type="submit" value="Pesquisar"/>
                            </div>
                        </div>

                        <p>Ainda não tem cadastro?
            <a href="telacaduser.php" onclick="toggleForms()"style="color: black;">Cadastre-se</a>
        </p>
        
                    </form>
</section>


<footer>
        <p>&copy; 2024 </br>Bruna Luiza Turma A</p>
    </footer>


</body>
</html>