<?php 
include ("../main/head.php");
include ("../main/menu.php");

$IdApp = "0";
if ( SanPedro($IdApp,$IdUser) == TRUE){
    HeaderApp($IdApp);

    echo "<secion id='' class='Contenido'>";

    echo "</section>";




    
} else {
    MsgBlock("No tienes acceso a esta aplicacion", 1);
}


include ("../main/footer.php");

?>