<?php

session_start();
function verificaUsuario() {
    if(!usuarioEstaLogado()){
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    } else {
        
    }
}

function usuarioEstaLogado() {
    return isset($_SESSION["usuario-logado"]);
}

function usuarioLogado() {
    return $_SESSION["usuario-logado"];
}


function logaUsuario($email) {
    setcookie("usuario-logado", email, time() + 60);
    $_SESSION["usuario-logado"] = $email;
}

function logout() {
    session_destroy();
}