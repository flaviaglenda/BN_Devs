<?php

$connection = new mysqli("localhost", "root", "", "boasnovas_db");

if ($connection->connect_error) {
    die("Erro de conexão ({$connection->connect_errno}): {$connection->connect_error}");
}