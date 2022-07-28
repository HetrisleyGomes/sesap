<?php
    include 'session.php';
    if (!getLembrar()){
        rmvEmail();
    }


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="p-2 d-flex justify-content-center" style="background-color: #219EBC;">

    <?php

    if (!empty(getMsg())){
        echo '<div class="position-absolute bgcw">'. getMsg() . "</div>";
        sleep(1);
        rmvMsg();
    }
            
            

    ?>

    <main class="container-xxg colunas align-self-center mt-3">
        <div class="coluna c-1 d-flex justify-content-center">
            <div class="d-block">
                <img src="img/degrade_sem_fundo.png" class="img" alt="Identidade Visual OFICIAL da UGTSIC">
            </div>
        </div> 
        <div class="coluna c-2">
            <div class="top">
                <div class="button-top d-flex justify-content-end m-2 mb-3">
                    <form action="trocarform.php" method="post">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="submit" class="btn btn-primary entrar" value="Entrar" name="option">
                            <input type="submit" class="btn btn-primary cadastrar disabled" value="Cadastrar" name="option">
                        </div>
                    </form>
                </div>
            </div>

            <div class="form m-3 mb-1">
                <h3 class="ms-2">Faça seu Cadastro na UGTSIC</h3>
                <form action="receberform.php" method="post" class="form w-50 m-2">

                    <div class="mt-2">
                        <label for="fcpf" class="form-label">Informe o seu CPF:</label>
                        <input type="text" name="fcpf" id="fcpf" class="form-control form-control-sm" maxlength="64" placeholder="informe seu CPF">
                    </div>
                    <div class="mt-1">
                        <label for="femail" class="form-label">Informe o seu e-mail:</label>
                        <input type="email" name="femail" id="femail" class="form-control form-control-sm" maxlength="64" placeholder="informe seu email">
                    </div>
                    <div class="mt-1">
                        <label for="fsenha" class="form-label">Informe uma senha:</label>
                        <input type="password" name="fsenha" id="fsenha" class="form-control form-control-sm" placeholder="informe sua senha">
                    </div>
                    <div class="mt-1">
                        <label for="fsenha" class="form-label">Confirme a senha:</label>
                        <input type="password" name="fsenha" id="fsenha" class="form-control form-control-sm" placeholder="confirme a senha">
                    </div>
                    <div class="d-grid gap-1 col-12 mx-auto mt-3">
                        <div class="row">
                            <button type="submit" class="btn btn-secondary col m-2">Cancelar</button><button type="submit" class="btn btn-primary col m-2">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>   
    </main>

</body>
</html>
