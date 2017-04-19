<?php

// Autoloading classes for better convenience
require_once 'Autoloader.php';

$cat = new Cat('garfield');

echo $cat->getName() === 'garfield'; // true

echo $cat->meow() === 'Cat garfield is saying meow'; // true
