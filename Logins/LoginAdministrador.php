<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EstiloLogins.css">

    <title>Administrador - BJJ Revolution</title>
</head>

<body>
    <div class="cabecalho">
        <header>
            <div class="titulo">
                <img src="../Imagens/logo.png" alt="">
            </div>

            <div class="logoPerfil">
                <img src="../Imagens/ADMlogo.png" alt="">
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="LoginAdministrador.php">Finanças</a></li>
                    <li><a href="LoginAdministrador.php">Presenças</a></li>
                    <li><a href="LoginAdministrador.php">Perfil</a></li>


                    <ul>
                        <li><a href="../DemaisPaginas/Ajuda.php">Ajuda</a></li>
                        <li><a href="../DemaisPaginas/Contato.php">Contato</a></li>
                        <li><a href="../DemaisPaginas/Sobre.php">Sobre</a></li>

                    </ul>

                    <ul>
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
                    <form action="LoginAdministrador.php" method="POST">

                        <h3>L O G I N</h3>
                        <p>
                            <label>CPF: </label>
                            <input type="text" id="txtCPF">
                        </p>

                        <p>
                            <label>Senha: </label>
                            <input type="password" id="txtSenha">
                        <div id="icone"></div>
                        </p>

                        <p>
                            <button name="btnEntrar">Entrar</button>
                        </p>


                        <p>
                            Não possui conta? <a href='../DemaisPaginas/Contato.php'>Entrar em contato</a>
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