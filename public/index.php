<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Codearemos\Calculator\Entities\Sum;

$sum = new Sum();

echo $sum->apply(1,2);