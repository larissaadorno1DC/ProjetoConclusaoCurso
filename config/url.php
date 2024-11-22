<?php

// Inicia a sessão
// inicia ou resume uma sessão existente. Isso é necessário para utilizar variáveis de sessão no PHP.

// Definição da URL base
// é definido como a URL base do projeto. Isso pode ser útil para criar URLs absolutas ao invés de URLs relativas, facilitando a navegação entre páginas.

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . "/ProjetoConclusaoCurso/";
