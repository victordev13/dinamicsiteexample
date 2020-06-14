<?php
const HOSTNAME = "127.0.0.1:3307";
const USERNAME = "root";
const PASSWORD = "";
const DBNAME = "sitedinamico";

function conexao()
{
    $conexao = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    return $conexao;
}

?>