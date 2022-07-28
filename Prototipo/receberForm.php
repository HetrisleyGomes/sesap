<?php
    include 'session.php';
    include 'bd.php';

$femail = $_POST['femail'];
$fsenha = $_POST['fsenha'];
if (isset($_POST['lembrar'])){
    setLembrar(true);
} else {
    rmvLembrar();
}

if (empty($femail)){
    setMsg("Preencha os campos!");
} else if (empty($fsenha)) {
    setMsg("Preencha os campos!");
    if (isset($_POST['lembrar'])){
        setEmail($femail);
    }
} else {
    if (checar($femail,$fsenha)){
        setMsg("Login realizado com sucesso!");
    
    } else {
        setMsg("Credenciais não aceitas!");
    }
}

header('location: index.php');
