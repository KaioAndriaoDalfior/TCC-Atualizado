<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EstiloLogins.css">
    <title>Login Professor - BJJ Revolution</title>
</head>

<body>
    <div class="cabecalho">
        <header>
            <div class="titulo">
                <img src="../Imagens/logo.png" alt="">
            </div>

            <div class="logoPerfil">
                <img src="../Imagens/Professor logo.png" alt="">
            </div>



            <nav class="menu">
                <ul>
                    <li><a href="LoginProfessor.php">Finanças</a></li>
                    <li><a href="LoginProfessor.php">Presenças</a></li>
                    <li><a href="LoginProfessor.php">Perfil</a></li>
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

    <div class="meio">
        <main>

            <div class="container">
                <div class="quadrado">
                    <form action="LoginProfessor.php" method="POST">

                        <h2>Login</h2>
                        <h1>-------------------------</h1>

                        <?php if (!empty($mensagem)) : ?>
                            <p><?php echo $mensagem; ?></p>
                        <?php endif; ?>

                        <p>
                            <label>Nome de Usuário: </label>
                            <input type="text" id="txtNomeUsuario" name="txtNomeUsuario">
                        </p>

                        <p>
                            <label>Senha: </label>
                            <input type="password" id="txtSenha" name="txtSenha">

                        </p>

                        <p>
                            <button type="submit" name="btnLogin">Login</button>
                        </p>

                        <p>
                            Não possui conta? <a href='../Registros/RegistroProfessor.php'>Registrar-se</a>
                        </p>
                    </form>
                </div>
            </div>
        </main>

    </div>

    <div class="rodape">
        <footer>
            <p>Kaio Andrião Dalfior &copy; 2024 - TODOS OS DIREITOS RESERVADOS
            </p>
        </footer>
    </div>
</body>

</html>