// index.php

<?php

require_once("controladores/usuarioControlador.php");

?>
// modelos/usuarioModelo.php

<?php

function obtenerUsuarios(){

    $usuarios = [
        "Juan",
        "Maria",
        "Carlos",
        "Ana"
    ];

    return $usuarios;
}

?>