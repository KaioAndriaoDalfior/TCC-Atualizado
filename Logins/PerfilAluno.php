<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: loginAluno.php");
    exit();
}

include_once('config.php');

$sql = "SELECT * FROM Alunos WHERE NomeUsuario = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $_SESSION['usuario']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $aluno = $result->fetch_assoc();
} else {
    echo "Erro ao obter informações do aluno.";
    exit();
}

$conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./EstiloPerfilAluno.css">
    <title>Perfil</title>
</head>
<body>
    <div class="cabecalho">
        <header>
            <div class="titulo">
                <img src="../Imagens/logo.png" alt="">
            </div>

            <div class="logoPerfil">
                <img src="../Imagens/AlunoLogo.png" alt="">
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="">Ajuda</a></li>
                    <li><a href="">Contato</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="#">Finanças</a></li>
                    <li><a href="#">Presenças</a></li>
                    <li><a href="#">Meu Perfil</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <main>
        <div class="container">
            <div class="quadrado">
                <h2>Meu Perfil</h2>
                <div>
                    <p><strong>Nome Completo:</strong> <?php echo $aluno['NomeCompleto']; ?></p>
                    <p><strong>Nome de Usuário:</strong> <?php echo $aluno['NomeUsuario']; ?></p>
                    <p><strong>CPF:</strong> <?php echo $aluno['CPF']; ?></p>
                    <p><strong>Data de Nascimento:</strong> <?php echo $aluno['DataNascimento']; ?></p>
                    <p><strong>Faixa:</strong> <?php echo $aluno['Faixa']; ?></p>
                    <p><strong>Grau:</strong> <?php echo $aluno['Grau']; ?></p>
                </div>
                <button type="button" onclick="editarPerfil()">Editar</button>
                <button type="submit" name="btnSalvar" style="display: none;">Salvar</button>
            </div>
        </div>
    </main>

    <footer>
        <p>Kaio Andrião Dalfior &copy; 2024 - TODOS OS DIREITOS RESERVADOS</p>
    </footer>

    <script>
        function editarPerfil() {
            window.location.href = "editarPerfil.php";
        }
    </script>
</body>
</html>
