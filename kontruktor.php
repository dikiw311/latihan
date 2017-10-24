<?php

require_once'construct.php';

$sapi1 = new sapi('Moww....Mowww',30);
$sapi1->set_suara('Awweu Awweu Awweu');
$sapi1->set_berat(120);
echo "Sapi saya bersuara :".$sapi1->get_suara(). '<br>';
echo "Sapi saya mempunyai berat :".$sapi1->get_berat().' Kg'. '<br>';
 

?>