<?php

class User
{
    /* @var string */
    public $name;

    /* @var int */
    public $age;
}

$client = new \MongoClient();
$db = $client->phpugrhh;
$storage = $db->object_storage;

$user = new User();
$user->_id = 'cmuench';
$user->name = 'Christian Münch';
$user->age = rand(30, 40);

$storage->save($user);

$js = <<<'JS'
user = db.object_storage.findOne({_id: 'cmuench'});
user['company'] = 'netz98 new media GmbH';
user['ts'] = new Date();
db.object_storage.save(user);
JS;

$db->execute(new \MongoCode($js));

$user = $storage->findOne(array('_id' => 'cmuench'));
var_dump($user);



