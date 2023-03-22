<?php

use Core\Boot;
use App\Models\Model;

define('ROOT', realpath(__DIR__ . '/../'));

require ROOT . '/vendor/autoload.php';

$boot = new Boot;
$boot->boot();

$connection = Model::getInstance();



// izvršavanje SQL upita korištenjem $model objekta
$tableName = 'zanrovi';
$statement = $model->connection->query("SELECT * FROM $tableName");
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

// prikazivanje rezultata upita
foreach ($rows as $row) {
    echo $row['ID_zanra'] . ' ' . $row['naziv'] . '<br>';
}

