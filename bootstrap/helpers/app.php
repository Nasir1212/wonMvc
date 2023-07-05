<?php
use Core\Framework;
$app = new  Framework();

function view($view,$param=[]){
    global $app;
    $app->render($view,$param);


}