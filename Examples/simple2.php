<?php

$client = new \MongoClient('mongodb://127.0.0.1:27017');
$db = $client->{'foo-bar'};

$db->selectCollection('foo')
   ->insert(array('test'));