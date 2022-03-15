<?php
//abrindo
session_start();
//Destruindo sessão
session_destroy();
//destruindo variavel do login
unset($_COOKIE['usuario']);
//Enviando cookie  vazio para login.php 
setcookie('usuario', '');
header('Location: login.php');