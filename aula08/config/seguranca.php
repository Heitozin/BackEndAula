<?php
//Garantir a segurança na entrega de informações apenas para usuários autenticados e verificados no PHP e pelo Banco de Dados
session_start();

if($_SESSION["ID_USUARIO"]){

}else{
    header("Location: login.php");
}