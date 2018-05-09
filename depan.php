<?php  

spl_autoload_register(function($class) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$v = new \app\view();
$v->render();
echo "<br>";
$v = new \baru\view();
$v->render();
echo "<br>";
$s = new \baru\mahasiswa();
$s->test();
 ?>