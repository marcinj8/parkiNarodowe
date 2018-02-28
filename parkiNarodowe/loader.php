<?php

$CONTENT = $_POST['Content'];

if ($CONTENT == 'parki') {
    require_once('pages/'.$CONTENT.'.php');
} else if ($CONTENT == 'spis') {
    require_once('pages/'.$CONTENT.'.php');
} else if ($CONTENT == 'mapa') {
    require_once('pages/'.$CONTENT.'.php');
} else if ($CONTENT == 'kontakt') {
    require_once('pages/'.$CONTENT.'.php');
}

?>
