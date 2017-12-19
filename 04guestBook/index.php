<?php
require_once  'config.php';
require_once  'db.php';
require_once  'ajax.php';

error_reporting(-1);
ini_set('display_errors', true);
ini_set('log_errors', true);
ini_set('error_log', 'error.log');

$db = new Database();


if (isset($_GET)){
    if (isset($_GET['page'])){
        $active = $_GET['page'];
    }
}


$db->query('SELECT * from guestbook'); /*todo */
$result = $db-> resultset();

echo '<pre>';
//var_dump($result);
echo 'result rows = '.$db->rowCount();
echo '</pre>';

include 'template.php';