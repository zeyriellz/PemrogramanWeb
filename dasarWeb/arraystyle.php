<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 500px;
            margin: 20px; 
        }
        td {
            color: #000000ff;      
            padding: 12px 15px;
            border: 1px solid #000000ff; 
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "<table>";
        echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
        echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
        echo "</table>";
    ?>

</body>
</html>