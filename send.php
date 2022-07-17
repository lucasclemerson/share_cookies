<?php
    $value = 'valor de teste';
    $tempo_expirar = time()+3600;
    setcookie("CookieTeste", $value, $tempo_expirar, "/", ".dominio.principal.com.br");
