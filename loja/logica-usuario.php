<?php

function verificaUsuario() {
    if(!usuarioEstaLogado()){
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    } else {
        
    }
}

function usuarioEstaLogado() {
    return isset($_COOKIE["usuario-logado"]);
}

function usuarioLogado() {
    return $_COOKIE["usuario-logado"];
}


function logaUsuario($email) {
    setcookie("usuario-logado", email, time() + 60);
}