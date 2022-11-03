<?php
require_once 'inc/headers.php';
require_once 'inc/functions.php';

try {
$db = openDb();
$sql = "select * from item";
$query = $db->query($sql);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
header('HTTP/1.1 200 OK');
print $json;
} catch (PDOException $pdoex) {
    returnError($pdoex);
}
