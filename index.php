<?php

require_once 'animal.php';
require_once 'cachorro.php';
require_once 'gato.php';
require_once 'pessoa.php';


$dog = new cachorro;
$cat = new gato;


$p = new pessoa;
$p-> addEstimacao($dog);
$p-> addEstimacao($cat);
$p->showEstimacao();