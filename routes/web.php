<?php
use Core\Framework;

$app = new Framework();
$app::get('/','HomeController','index');
$app::get('/home','HomeController','index');
$app::get('/test','HomeController','test');
$app->run();