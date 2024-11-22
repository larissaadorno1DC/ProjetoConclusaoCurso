<?php
session_start();
session_destroy(); // 'destroi' a sessão iniciada 
header("Location: login.php"); // redireciona pra pagina de login dnv
exit();
?>
