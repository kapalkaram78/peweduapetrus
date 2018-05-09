<?php  

spl_autoload_register(function($class) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$v = new \app\view();
$v->render();
echo "<br>";
$v = new \src\view();
$v->render();
echo "<br>";
$s = new \src\mahasiswa();
$s->test();
echo "<br>";
\model\Mahasiswa::munculkanNama();
 ?>