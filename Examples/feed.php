<?php

$client = new \MongoClient();
$db = $client->phpugrhh;

$feed = $db->feed;
$feed->remove();

$feedData = \file_get_contents('http://www.php.net/releases/feed.php');
var_dump($feedData);

$xml = simplexml_load_string($feedData);
foreach ($xml->entry as $entry) {
    $feed->insert($entry);
}