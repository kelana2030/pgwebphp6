<?php
$data_penduduk = [
    ["Moyudan", 27.62, 31497],
    ["Minggir", 27.27, 29886],
    ["Seyegan", 26.63, 47129],
    ["Godean", 26.84, 72028],
    ["Gamping", 29.25, 108675]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Data Penduduk PHP</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>

        <?php
        foreach ($data_penduduk as $data) {
            echo "<tr>";
            echo "<td>" . $data[0] . "</td>";
            echo "<td>" . $data[1] . "</td>";
            echo "<td>" . $data[2] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>

