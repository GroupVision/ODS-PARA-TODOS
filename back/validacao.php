<?php
    session_start();

    if(!isset($_SESSION["codigo"]) || !isset($_SESSION["nome"])){
      header("Location: index.php");
      exit;
    }
?>  