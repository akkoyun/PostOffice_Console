<?php

$ayarlar = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_CASE => PDO::CASE_NATURAL,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];


$baglanti_cumlesi = sprintf(
	"pgsql:host=%s port=%s dbname=%s user=%s password=%s",
	"localhost",
	"5432",
	"PostOffice",
	"postgres",
	"00204063f4b4!NN"
);

try {
	$baglanti = new PDO($baglanti_cumlesi, null, null, $ayarlar);
} catch (PDOException $ex) {
	die($ex->getMessage());
}

//$baglanti = null;

echo "Device List<br />";

//$sorgu = $baglanti->query("SELECT * FROM \"Module\"");
//$cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

foreach ($connec->query("SELECT * FROM \"Module\"") as $row) 
{
	echo "-> " .
    $row["Device_ID"] .
	" - " .
    $row["Last_Online_Time"];
}

?>