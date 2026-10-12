
<?php

$harga_anak = 15000;
$harga_dewasa = 25000;

echo "=================================\n";
echo " APLIKASI TIKET KOLAM RENANG\n";
echo "=================================\n";
echo "1. Tiket Anak-anak : Rp15.000\n";
echo "2. Tiket Dewasa    : Rp25.000\n";
echo "=================================\n";

$nama = readline("Nama pembeli: ");
$anak = (int) readline("Jumlah tiket anak-anak: ");
$dewasa = (int) readline("Jumlah tiket dewasa: ");

if (trim($nama) == "" || $anak < 0 || $dewasa < 0 ||
    ($anak == 0 && $dewasa == 0)) {
    echo "Pembelian tidak valid!\n";
    exit;
}

$total_anak = $anak * $harga_anak;
$total_dewasa = $dewasa * $harga_dewasa;
$total = $total_anak + $total_dewasa;

echo "\n========== STRUK TIKET ==========\n";
echo "Nama pembeli : $nama\n";
echo "Tiket anak   : $anak\n";
echo "Tiket dewasa : $dewasa\n";
echo "Total tiket  : " . ($anak + $dewasa) . "\n";
echo "Total bayar  : Rp" .
    number_format($total, 0, ',', '.') . "\n";
echo "=================================\n";
echo "Terima kasih telah berkunjung!\n";

?>
