<?php
session_start();

function setMsg($msg){
    $_SESSION['msg']=$msg;
}

function getMsg(){
    if (!empty($_SESSION['msg'])){
        return $_SESSION['msg'];
    }
}

function rmvMsg(){
    if (!empty($_SESSION['msg'])){
        unset($_SESSION['msg']);
    }
}


function setEmail($email){
    $_SESSION['email']=$email;
}

function getEmail(){
    if (!empty($_SESSION['email'])){
        return $_SESSION['email'];
    }
}

function rmvEmail(){
    if (!empty($_SESSION['email'])){
        unset($_SESSION['email']);
    }
}

function setSenha($senha){
    $_SESSION['senha']=$senha;
}

function getSenha(){
    if (!empty($_SESSION['senha'])){
        return $_SESSION['senha'];
    }
}

function rmvSenha(){
    if (!empty($_SESSION['senha'])){
        unset($_SESSION['senha']);
    }
}

function setLembrar($lembrar){
    $_SESSION['lembrar']=$lembrar;
}

function getLembrar(){
    if (!empty($_SESSION['lembrar'])){
        return $_SESSION['lembrar'];
    }
    return false;
}

function rmvLembrar(){
    if (!empty($_SESSION['lembrar'])){
        $_SESSION['lembrar'] = false;
    }
}
