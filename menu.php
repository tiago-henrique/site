<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $userId = $_SESSION['userId'];

    if(empty($userId))
    {
        header("Location: index.php");
    }

    $hora = date("H");
    if($hora < 12)
    {
        $saudacao = "Bom dia!";
    }
    if($hora >= 12)
    {
        $saudacao = "Boa tarde!";
    }
    if($hora >= 18)
    {
        $saudacao = "Boa noite!";
    }
?>
<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <title>Sistema para laboratórios - v.1.00</title>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel="canonical" href="https://example.com"/>
        <meta charset='utf8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
        <header>
            <div class='titulo'>Sistema para laboratórios</div>
        </header>
        <div class='content'>
            <div class='topHead'>
                <div class='userHead'>
                    <div class='avatar'></div>
                    <div class='id'><?php echo $userId; ?></div>
                </div>
                <div class='salHead'><?php echo $saudacao; ?></div>
                <div class='exitHead'>
                    <a href='logoff.php'><p>Sair</p></a>
                </div>
            </div>
            <div class='left'>
                <div class='menu'>
                    <ul>
                        <a href='biobanco'><li>Banco de amostras</li></a>
                        <a href='equipamentos'><li>Equipamentos</li></a>
                        <a href='estoque'><li>Estoque</li></a>
                        <a href='projetos'><li>Projetos</li></a>
                        <a href='recados'><li>Recados</li></a>
                        <a href='sistema'><li>Sistema</li></a>
                        <a href='usuarios'><li>Usuários</li></a>
                        <a href='logoff.php'><li>Sair</li></a>
                    </ul>
                </div>
            </div>
            <div class='right'></div>
        </div>
        <footer>&nbsp;</footer>
    </body>
</html>