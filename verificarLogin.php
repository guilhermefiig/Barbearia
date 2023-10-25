<?php

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $loginCerto = 'gui123';
    $senhaCerta = '1234';
    
    if($login == $loginCerto and $senha == $senhaCerta){
        header('location: barbeiro.php');
    }
?>