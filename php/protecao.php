<?php

if (!isset($_SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])){
    die("Você não está logado, então não tem acesso a esta página.");
}
?>