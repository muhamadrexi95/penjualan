<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'penjualan');

//koneksi dan memilih database diserver
$koneksi = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
$database =mysql_select_db(DB_DATABASE);

if($koneksi){
	echo "";
} else {
	echo "KONEKSI DATABASE DIE";
}
?>