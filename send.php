<?php
    setcookie("CookieTeste", 'Clemerson', time()+3600, "/", ".atlantic.tec.br");
    //echo $_COOKIE["CookieTeste"];
    print_r($_COOKIE);


/*
    $value = 'alguma coisa de algum lugar';
    setcookie("CookieTeste", $value);
    setcookie("CookieTeste", $value, time()+3600);  
    setcookie("CookieTeste", $value, time()+3600, "/", ".msg.atlantic.tec.br", 1);


    echo $_COOKIE["CookieTeste"];
    print_r($_COOKIE);
*/

    //$expira = time() + ( 60 * 60 * 24 * 30 );
    //setcookie('meu_cookie', 'valor do cookie', $expira, "msg.atlantic.tec.br/", "atlantic.tec.br/", false, false);


    //echo $_COOKIE['meu_cookie'];
    //echo date('d/m/Y H:i:s', $expira);
    //setcookie('meu_cookie', '', time()-3600);
   
