<?php
    $dircod = $_POST['codigo'];
    $diraux = "newfolder/$dircod";

    if(is_dir($diraux)){
        echo "A pasta \"$dircod\" ja existe.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }else {
        mkdir($diraux,0777);
        echo "Pasta criada com sucesso.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }

?>