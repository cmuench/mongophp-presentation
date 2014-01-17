<?php

$client = new \MongoClient();
$db = $client->selectDB('phpugrhh');

$collection = $db->selectCollection('workers');

$collection->remove();

$collection->insert(
    array(
        '_id'  => 1,
        'name' => 'Peter',
    )
);

$collection->insert(
    array(
        '_id'       => 2,
        'name'      => 'Klaus',
        'co-worker' => \MongoDBRef::create('workers', 1, 'phpugrhh'),
    )
);

$cursor = $collection->find();
foreach ($cursor as $doc) {
    var_dump($doc);
    if (isset($doc['co-worker'])) {
        var_dump(\MongoDBRef::get($db, $doc['co-worker']));
    }
}