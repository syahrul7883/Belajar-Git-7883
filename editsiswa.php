<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

if (isset($_POST['kirim'])) {
	exit('Access Forbiden');
}
$siswa = new Siswa();

$data ['input_name'] = $_POST['in_name'];
$data ['input_email'] = $_POST['in_email'];
$data ['input_nationality'] = $_POST['in_nationality'];
$data ['foto'] = "";

$siswa -> updateSiswa($_POST['in_nis'], $data);

echo "Data siswa berhasil di update<br />";
echo "<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa</a>

?>
