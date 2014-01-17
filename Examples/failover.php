<?php

$mongo = new MongoClient('localhost:27018,localhost:27019,localhost:27020', array('replicaSet' => 'phpugrhh'));

$db = $mongo->selectDB('test');
$log = $db->selectCollection('log');

$log->remove();
for ($i = 0; $i < 1000000; $i++) {
    $doc = array('i' => $i);

    for ($retry = 0; $retry < 3; $retry++) {
        try {
            $log->insert($doc);
            echo 'Inserted ' . $i . PHP_EOL;
            break;
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            sleep(5);
        }

        sleep(5);
    }
}