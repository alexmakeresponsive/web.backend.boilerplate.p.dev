<?php
header('Content-Type: text/html; charset=utf-8');



require __DIR__ . '/autoload.php';

$db = new App\Db();

$result = $db->query('SELECT * FROM news', [], '\App\Models\Article');

echo '<pre>';
var_dump($result);
echo '</pre>';