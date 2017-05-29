<?php
require __DIR__ . '/vendor/autoload.php';

$t = new Movies\Data\Connection();
var_dump($t);
exit;

$movies = new Movies\MovieLibrary();
$movies->addMovie('MySecondMovie', 'Test Director', 2017, array('Action', 'Adventure', 'Drama'));
$movies->searchMovie('drama');
