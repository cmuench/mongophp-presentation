<?php

$client = new \MongoClient();
$db = $client->phpugrhh;

$grid = $db->getGridFS();
$grid->storeFile('php-logo.png', array('metadata' => array('date' => new MongoDate())));

$doc = $grid->findOne(array('filename' => 'php-logo.png'));
/* @var $doc \MongoGridFSFile */
echo $doc->getResource();
echo $doc->getBytes();

