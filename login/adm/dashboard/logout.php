<?php
session_start();
unset($_SESSION['idUser']);
header("Location: index.php");

// tem que destruir a sessão
?>