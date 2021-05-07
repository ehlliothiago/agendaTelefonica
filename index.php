<?php
 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Agenda Telefônica</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">  
</head>

<body>
    <header>
        <ul>
            <li><a href="index.php">Adicionar Contato</a></li>
            <li><a href="lista.php">Visualizar Contato</a></li>
        </ul>
    </header>

    <main>
        <h1>Agenda Telefônica</h1>
        <hr>
        <h2><strong>Criar Contato</strong></h2>
        <div class="center">
        <form name="meu-form" action="conexao.php" method="POST">
           
            <p class="nome">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Informe seu nome" required="required">
            </p>
            <p class="email">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Informe seu e-mail" required="required"> 
            </p>
            <p class="tel">
                <label for="tel">Telefone</label>
                <input id="telefone" type="tel" name="telefone" placeholder="(XX)XXXXX-XXXX" required="required">
            </p>
            <input id="enviar" type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
        </form>
        </div>
    </main>

</body>

</html>
