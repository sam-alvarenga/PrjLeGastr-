<?php

    define('HOST','localhost');
    define('USUARIO','root');
    define('SENHA','');
    define('DB','db_restaurante');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível se conectar.')


?>


