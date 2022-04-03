<?php

use CowSay\Cow;

require_once 'vendor/autoload.php';

$cow = new Cow('Meuhhhh');
$cow->say();
echo $cow.'<br>';

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo  $bessie.'<br>';