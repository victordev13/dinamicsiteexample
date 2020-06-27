<?php
const HOSTNAME = "127.0.0.1:3307";
const USERNAME = "root";
const PASSWORD = "";
const DBNAME = "victor_site";

function conexao()
{
    $conexao = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    return $conexao;
}

?>