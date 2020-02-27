<?php

echo "Masukin Nama Lo : ";
$name = trim(fgets(STDIN));
if($name == 'rapli'){
	echo "Nama Yang Bagus! \n";
}if($name == 'Rafli'){
	echo "Nama Yang Bagus! \n";
}else{
	echo "Buriq Bat Anjir \n";
}
echo "\n";
sleep(1);
echo "L";
sleep(1);
echo "o";
sleep(1);
echo "a";
sleep(1);
echo "d";
sleep(1);
echo "i";
sleep(1);
echo "n";
sleep(1);
echo "g";
sleep(1);
echo ".";
sleep(1);
echo ".";
sleep(1);
echo ".\n";
sleep(2);
echo ">==================================<\n";
echo "<             TOOLS                >\n";
echo "<       [1] ENCRYPT MD5            >\n";
echo "<       [2] DECRYPT MD5            >\n";
echo ">==================================<\n";
echo "\n";
echo "Pilih [1] or [2] : ";
$pilihan = trim(fgets(STDIN));
if ($pilihan == '1') {
	echo "Tulis Disini : ";
	$hash = trim(fgets(STDIN));
	echo "Hasilnya : [ ".md5($hash)." ]\n";
}if ($pilihan == '2') {
	echo "Paste Text Encryptnya : ";
	$pass = trim(fgets(STDIN));
	$hasil = file_get_contents("http://www.nitrxgen.net/md5db/".$pass);
	echo "Hasilnya : [ ".$hasil." ]\n";
}

?>
