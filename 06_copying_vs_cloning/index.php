<?php

require 'user.php';

$joost = new User();
$joost->setEmail('joost@tutplus.com');
$joost->setPassword('12576rhgfsad');

$mike = clone $joost;
$mike->setEmail('mike@tutplus.com');
$joost->setEmail('joost@tutplus.com');
 var_dump($joost);
echo '<br>';
var_dump($mike);
echo '<br>';