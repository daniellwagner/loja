<?php

session_start();
function verificaUsuario() {
    if(!usuarioEstaLogado()){
        $_SESSION["danger"] = "Voce nao tem acesso a essa funcionalidade";
        header("Location: index.php");
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
    session_start();
}