<?php  
require_once 'app/view.php';
require_once 'baru/view.php';

$v = new \app\view();
$v->render();

$v = new \baru\view();
$v->render();
 ?>