<?php

include 'vendor/autoload.php';

$pug = new Pug([
    'pretty' => true,
    'expressionLanguage' => 'php',
    'cache' => false
]);

$pug->displayFile('template.pug');