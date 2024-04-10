<?php

if(isset($_POST['btnCadastrar'])){
    include_once('config.php');

    $conexao = mysqli_connect("localhost", "root", "", "crudjiujitsu");

    if (mysqli_connect_errno()) {
        echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
        exit();
    }


    $NomeCompleto = $_POST['txtNomeCompleto'];
    $NomeSocial = $_POST['txtNomeSocial'];
    $NomeUsuario = $_POST['txtNomeUsuario'];
    $SenhaAluno = $_POST['txtSenha'];
    $CPF = $_POST['txtCPF'];
    $DataNascimento = $_POST['txtDataNascimento'];
    $Faixa = $_POST['faixa'];
    $Grau = $_POST['grau'];

    $result = mysqli_query($conexao, "INSERT INTO Alunos (NomeCompleto, NomeSocial, NomeUsuario, SenhaAluno, CPF, DataNascimento, Faixa, Grau) VALUES 
    ('$NomeCompleto', '$NomeSocial', '$NomeUsuario', '$SenhaAluno', '$CPF', '$DataNascimento', '$Faixa', '$Grau')");


    if ($result) {
        $mensagem = "Registro de aluno inserido com sucesso.";

        echo '<script>
                setTimeout(function() {
                    window.location.href = "./Alunos/Login/LoginAluno.php";
                }, 3000); // 3000 milissegundos = 3 segundos
              </script>';
    } else {
        $mensagem = "Erro ao inserir registro de aluno: " . mysqli_error($conexao);
    }

 
    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./EstiloRegistro.css">
    <title>Registro Alunos</title>
</head>
<body>
    <div class="cabecalho">
        <header>
            <div class="titulo">
                <img src="../Imagens/logo.png" alt="">
            </div>

            
            <div class="logoPerfil">
                <img src="../Imagens/LogoAluno.png" alt="">
            </div>
            
           


            <nav class="menu">
                <ul>
                    <li><a href="LoginAluno.php">Finanças</a></li>
                    <li><a href="LoginAluno.php">Presenças</a></li>
                    <li><a href="LoginAluno.php">Perfil</a></li>
                    <li><a href="../DemaisPaginas/Ajuda.php">Ajuda</a></li>
                    <li><a href="../DemaisPaginas/Contato.php">Contato</a></li>
                    <li><a href="../DemaisPaginas/Sobre.php">Sobre</a></li>
                    <li><a href="#">LOGOUT</a></li>

                </ul>
                </ul>
            </nav>
    </div>
    </div>
    </header>
    <main>
        
        <div class="container">
            <div class="quadrado">
                <form action="RegistroAlunos.php" method="POST">
                    
                    <h2>R E G I S T R O</h2>
                    <h1>-------------------------</h1>
                    
                    <p>
                        <label>Nome Completo: </label>
                        <input type="text" id="txtNomeCompleto" name="txtNomeCompleto">
                    </p>
                    
                    
                    <p>
                        <label>Nome Social</label>
                        <input type="text" id="txtNomeSocial" name="txtNomeSocial">
                    </p>
                    
                    <p>
                        <label>Nome de Usuário</label>
                        <input type="text" id="txtNomeUsuario" name="txtNomeUsuario">
                    </p>
                    
                    <p>
                        <label>Senha: </label>
                        <input type="password" id="txtSenha" name="txtSenha">
                    </p>
                    
                    <p>
                        <label>CPF: </label>
                        <input type="text" id="txtCPF" name="txtCPF">
                    </p>
                    
                    
                    
                    <p>
                        <label>Data de Nascimento: </label>
                        <input type="date" id="txtDataNascimento" name="txtDataNascimento">
                    </p>
                    
                    <p>
                        <label>Faixa: </label>
                        <input type="text" id="txtFaixa" name="faixa">
                    </p>
                    
                    <p>
                        <label>Grau: </label>
                        <input type="text" id="txtGrau" name="grau">
                    </p>
                    
                    <p>
                        <label for="foto">Foto: </label>
            <input type="file" id="foto" accept="image/*" name="fotoPerfil">
        </p>

        
        <?php if(isset($mensagem)): ?>
            <div class="mensagem">
                <?php echo $mensagem; ?>
            </div>
        <?php endif; ?>


        <p>
            <button name="btnCadastrar" onclick="redirecionarParaLogin()">Cadastrar</button>
            </form>
        </div>
    </div>
</main>

<footer>
    <p>Kaio Andrião Dalfior &copy; 2024 - TODOS OS DIREITOS RESERVADOS</p>
</footer>

<script>
    function redirecionarParaLogin() {
        setTimeout(function() {
            window.location.href = "CadastroAlunosTCC/Alunos/Login/LoginAluno.php";
        }, 3000); 
    }
</script>

</body>
</html>