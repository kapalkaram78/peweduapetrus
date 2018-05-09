<!DOCTYPE html>
<html>
<head>
	<title>REGISTRASI PESERTA</title>
</head>
<body>
	<?php 
		$kabupaten = [
						[
							"id"=>1,
							"nama_kab"=>"Kota Pontianak",
						],
						[
							"id"=>2,
							"nama_kab"=>"Sekadau",
						],
						[
							"id"=>3,
							"nama_kab"=>"Sintang",
						] 
					]
	 ?>
	<h1>REGISTRASI</h1>
	<form method="post" action="proses.php">
	<table>
	<tr>	
		<td><label for="name">Nama</label></td>
		<td>:</td>
		<td><input type="name" name="name"></td>
	</tr>
	<tr>	
		<td><label for="username">Username</label></td>
		<td>:</td>
		<td><input type="username" name="username"></td>
	</tr>
	<tr>	
		<td><label for="password">Password</label></td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>	
		<td><label for="alamat">Alamat</label></td>
		<td>:</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td><label for="kabupaten">kabupaten</label></td>
		<td>:</td>
		<td><select name="kabupaten">
			<?php foreach ($kabupaten as $kab): ?>
			<option value="<?php echo $kab['id'] ?>"><?php echo $kab['nama_kab'] ?></option>
			<?php endforeach ?>
		</select>
		<td>
	</tr>
	<tr>
		<td><label for="phonenumber">No. HP :</label></td>
		<td>:</td>
		<td><input type="text" name="phonenumber"></td>
	</tr>
	<tr>
			<td><label for="jeniskelamin">Jenis Kelamin</label></td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="pria">Pria</td>
			<td><input type="radio" name="jeniskelamin" value="wanita">Wanita</td>
	</tr>
	<tr>
			<td><label for="pilihanprodi">Pilihan prodi</label></td>
			<td>:</td>
			<td>
				<input type="checkbox" name="pilihanprodi1"> Sistem Informasi <br>
				<input type="checkbox" name="pilihanprodi2"> Sistem komputer <br>
				<input type="checkbox" name="pilihanprodi3"> informatika <br>
			</td>
	</tr>	
	<tr>
		<td colspan="3"><input type="submit" name="submit" value="simpan"></td>
	</tr>
	</table>
	</form>
</body>
</html>