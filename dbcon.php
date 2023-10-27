<?php

require __DIR__.'/vendor/autoload.php';
// require __DIR__.'vendor\autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->
withServiceAccount('../wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json')
  ->withDatabaseUri('https://wjjhni-default-rtdb.firebaseio.com/');

  $database = $factory->createDatabase();
  ?>