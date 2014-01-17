<?php

$client = new \MongoClient('mongodb://127.0.0.1:27017,127.0.0.1:27018');
$db = $client->selectDB('phpugrhh');

$collection = $db->selectCollection('workers');
$result = $collection->find();