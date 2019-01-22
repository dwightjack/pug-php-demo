<?php

include 'vendor/autoload.php';

$pug = new Pug([
    'pretty' => true,
    'cache' => false
]);

$pug->displayFile('template.pug');