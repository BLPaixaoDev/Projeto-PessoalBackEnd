<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleuser.css">
    <title> Amigos</title>
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
        <h1>Cadastro Amigos</h1>
        <nav>
            <ul>
                <li><a href="aposlogin.php">Menu</a></li>
            </ul>
        </nav>
    </header>


<section>

<form id="cadastroForm" action="zinserir/inseriramigos.php" method="POST" style="display: block;">
<h2>Cadastre seu Amigo</h2>
         Amigo:
        <input type="text" name="cxamigo" placeholder="Exemplo: Seu nome"/><br/>
         Email:
        <input type="e-mail" name="cxemail" placeholder="Exemplo: user@gmail.com"/><br/>
         Telefone:
        <input type="text" name="cxtelefone" placeholder="Exemplo: (XX) XXXX-XXXX"/><br/>
         Whats:
        <input type="text" name="cxwhats" placeholder="Exemplo:(XX) 9XXXX-XXXX"/><br/>
         Data de nascimento:
        <input type="date" name="cxnascimento"/><br/>
        <input type="submit" value="Gravar">

        <p>Já cadastrou seu amigo? 
            <a href="#" onclick="toggleForms()"style="color: black;">Busque-a</a> 
        </p>
    </form>

                  
                    <form action="zconsulta/consultanomeamigo.php" id="consultaForm" method="POST" style="display: none;">
                    <h2>Consulte</h2>
                        <div class="container_form__itens">
                            <div class="container_form_itens__inputs">
                                <label for="">Digite o nome completo do amigo:</label></br></br>
                                <input type="text" name="cxpesquisa" id=""/>        
                            </div>
                                
                            <div class="container_form_itens__submit">
                                <input type="submit" value="Pesquisar"/>
                            </div>
                        </div>

                        <p>Ainda não cadastrou seu amigo?
            <a href="telacadamigos.php" onclick="toggleForms()"style="color: black">Cadastre-se</a>
        </p>
                    </form>
</section>

<footer>
        <p>&copy; 2024 </br>Bruna Luiza Turma A</p>
    </footer>

</body>
</html>