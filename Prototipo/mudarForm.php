<?php

$caminho = filter_input(INPUT_POST, "option");

if ($caminho == "Entrar"){
    header("location: index.php");
} else if ($caminho == "Cadastrar"){
    header("location: cadastro.php");
}
