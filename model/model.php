<?php 
namespace model;

class Model{
	public $config;
}
class Mahasiswa extends Model{
	public $nim;
	public $ipk;

	public function munculkanNama()
	{
		echo "Halo saya Sisfo";
	}
}

$santi = new Mahasiswa();
echo $santi->munculkanNama();
 ?>