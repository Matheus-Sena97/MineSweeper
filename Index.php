<?php

require_once 'parts/Table.class.php';

$table = new Table;
$table->firstClick();
$table->render();

?>
<br>
<input type="button" value="Novo Jogo" name="newgame">