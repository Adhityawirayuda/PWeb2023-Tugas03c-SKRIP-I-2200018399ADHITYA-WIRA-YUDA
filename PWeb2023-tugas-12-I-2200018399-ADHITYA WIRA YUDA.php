<?php
echo "<i>(Tugas konversi Mendeklarasikan & Menampilkan array)</i><br><br>";
$buah = array("Apel", "Mangga", "Jeruk", "Pisang");

echo "Daftar Buah:<br>";
foreach ($buah as $item) {
    echo $item . "<br>";
}
?>

<br><br>

<?php
echo "<i>(Tugas konversi Mengurutkan Array Dengan asort & arsort )</i><br><br>";
$angka = array(1, 2, 3, 4, 5);

echo "Elemen-elemen array: ";
foreach ($angka as $elemen) {
    echo $elemen . " ";
}

$jumlah = count($angka);
echo "<br>Jumlah elemen array: " . $jumlah;

$elemenKedua = $angka[1];
echo "<br>Elemen kedua: " . $elemenKedua;

$angka[] = 6;
echo "<br>Setelah ditambahkan elemen baru: ";
foreach ($angka as $elemen) {
    echo $elemen . " ";
}

sort($angka);
echo "<br>Setelah diurutkan secara ascending: ";
foreach ($angka as $elemen) {
    echo $elemen . " ";
}
?>

<br><br>

<?php
echo "<i>(Tugas konversi fungsi dengan return value dan parameter )</i><br><br>";
function tambah($a, $b) {
    $hasil = $a + $b;
    return $hasil;
}

$angka1 = 5;
$angka2 = 3;
$hasilTambah = tambah($angka1, $angka2);

echo "Hasil penjumlahan $angka1 + $angka2 = $hasilTambah";
?>


