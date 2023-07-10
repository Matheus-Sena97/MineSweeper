<?php

session_start();

require_once 'parts/Table.class.php';

$table = new Table();

if(!empty($_POST['newgame'])) {
    unset($_SESSION['table']);
}

if(!empty($_SESSION['table'])) {
    $table = unserialize($_SESSION['table']);
}

if(!empty($_GET['slot'])) {
}

if(!empty($_POST['slot'])) {
    $linha = 0;
    $coluna = 0;

    $matriz = explode(":", $_POST['slot']);
    if(count($matriz) == 2) {
        $linha = reset($matriz);
        $coluna = end($matriz);
    }

    $table->firstClick($linha, $coluna);
    $table->click($linha, $coluna);
}

$table->render();

$_SESSION['table'] = serialize($table);

?>
<br>
<form action="." method="POST"><input type="submit" value="Novo Jogo" name="newgame"></form>

<script>
    const buttons = document.getElementsByTagName("button");
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("mousedown", function(event) {
            if (event.which === 3 || event.button === 2) {                
                window.location.href = ".?slot="+this.value;
            }
        });
    }
    window.addEventListener("contextmenu", e => e.preventDefault());

</script>