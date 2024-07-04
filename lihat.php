<?php
echo "<h1>Daftar Pesanan</h1>";

$fp = fopen("orders.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp, 80)) {
    $pisah = explode("|", $isi);

    echo "<tr><td>Kamera </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Durasi </td><td>: $pisah[1] hari</td></tr>";
    echo "<tr><td>Nama </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Surel </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Total Harga </td><td>: Rp.$pisah[4]</td></tr>";
    echo "<tr><td>&nbsp; <hr></td><td>&nbsp;<hr></td></tr>";
}

echo "</table>";

echo "<a href='html.html'>Kembali</a>";

fclose($fp);
?>