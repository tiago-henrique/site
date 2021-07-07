<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-with, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <title>Sistema para laboratório</title>
    </head>
    <body>
        <div class='leftIndex'>
            <div class='titleIndex'>Sistema para laboratórios <br> (pensar em nome melhor) </div>
        </div>
        <div class='rightIndex'>
            <div class='formLogin'>
                <form name='login' method='post' action='login.php' enctype='multipart/form-data'>
                    <label>Nome</label><input type='text' id='nome' name='name' required>
                    <label>Senha</label><input type='password' id='senha' name='password' required>
                    <button>Logar</button>
                </form>
            </div>
        </div>
        <footer>
            <div class='copyright'>Desenvolvido por: Tiago Henrique - 2021 - versão: 1.00<br>&copy; All right reserved</div>
        </footer>
    </body>
</html>