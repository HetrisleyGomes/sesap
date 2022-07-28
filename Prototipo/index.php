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
    <style>
            .colunas {
            display: flex;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y);
            }
            main{
                width: 90%;
                height: 100%;
            }
            img.img {
                size: auto;
            }
            .c-1 {
                background-color: #EEEEEE;
                width: 40%;
            }
            .c-2 {
                background-color: #023047;
                color: #EEEEEE;
                width: 60%;
                padding-left: 2%;
            }
            .bgcw {
                background-color: #EEEEEE;
                padding: 10px;
                border-radius: 40px;
            }
            .botaoindex:hover{
                color: var(--bs-btn-hover-color);
                background-color: var(--bs-btn-hover-bg);
                border-color: var(--bs-btn-hover-border-color);
            }
            .btn-outline-danger{
                background-color: blue;
            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="p-2 d-flex justify-content-center" style="background-color: #D40800;">

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
                <div class="button-top d-flex justify-content-end m-2 mb-5">
                    <form action="trocarform.php" method="post">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="submit" class="botaoindex btn btn-danger entrar disabled" value="Entrar" name="option">
                            <input type="submit" class="botaoindex btn btn-danger cadastrar" value="Cadastrar" name="option">
                        </div>
                    </form>
                </div>
            </div>

            <div class="form m-3 mb-1">
                <h3 class="m-2 ms-2">Faça seu login na UGTSIC</h3>
                <form action="receberform.php" method="post" class="form w-50 m-2">
                    <div class="mt-3">
                        <label for="femail" class="form-label">e-mail:</label>
                        <?php
                            if(!empty(getEmail())){
                                echo '<input type="email" name="femail" id="femail" value="'.getEmail().'" class="form-control" maxlength="64" placeholder="digite seu email">';
                            } else {
                                echo '<input type="email" name="femail" id="femail" class="form-control" maxlength="64" placeholder="digite seu email">';
                            }
                        ?>
                    </div>
                    <div class="mt-2">
                        <label for="fsenha" class="form-label">senha:</label>
                        <input type="password" name="fsenha" id="fsenha" class="form-control" placeholder="digite sua senha">
                    </div>
                    <div class="d-grid gap-1 col-12 mx-auto mt-4">
                        <button type="submit" class="btn btn-danger">Entrar</button>
                        <a href="" class="link-primary">esqueci minha senha</a>
                    </div>
                    <div class="form-check mt-2">
                        <?php
                            if(getLembrar()){
                                echo '<input type="checkbox" class="form-check-input" name="lembrar" id="lembrar" checked>';
                            } else {
                                echo '<input type="checkbox" class="form-check-input" name="lembrar" id="lembrar">';
                            }
                        ?>
                        <label for="lembrar" class="form-label"> Lembrar de mim</label>
                    </div>
                </form>
            </div>
        </div>   
    </main>

</body>
</html>
