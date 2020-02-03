<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$input = file_get_contents('http://evertpot.com/atom.xml');

$service = new Sabre\Xml\Atom\Service();
print_r($service->parse($input));
