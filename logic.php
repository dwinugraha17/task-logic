<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2, .sub-title {
            text-align: center;
            color: #333;
            font-weight: bold;
        }

        .sub-title {
            margin-top: -10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: center;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: rgba(0, 253, 101, 0.52);
        }

        .pass {
            background-color: rgba(0, 253, 101, 0.52);
        }

        .fail {
            background-color: #f8d7da;
        }
    </style>
</head>
<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <div class="sub-title">Program Studi Informatika dan Akuntansi</div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th>Nilai Pertama</th>
                <th>Nilai Kedua</th>
                <th>Rata-Rata</th>
                <th>Total Nilai</th>
                <th>Lulus = Nilai > 150</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data_array = [
                ["id" => "1", "nama_mahasiswa" => "Rifqi Ismail", "program_studi" => "Informatika", "nilai_pertama" => 70, "nilai_kedua" => 93],
                ["id" => "2", "nama_mahasiswa" => "Sadad Nabil", "program_studi" => "Manajemen", "nilai_pertama" => 80, "nilai_kedua" => 62],
                ["id" => "3", "nama_mahasiswa" => "Friska Aprilia", "program_studi" => "Akuntansi", "nilai_pertama" => 92, "nilai_kedua" => 77],
                ["id" => "4", "nama_mahasiswa" => "Zaenal Arham", "program_studi" => "Informatika", "nilai_pertama" => 87, "nilai_kedua" => 63],
                ["id" => "5", "nama_mahasiswa" => "Laila Shafira", "program_studi" => "Pendidika Matematika", "nilai_pertama" => 67, "nilai_kedua" => 83],
                ["id" => "6", "nama_mahasiswa" => "Indah Salma", "program_studi" => "Informatika", "nilai_pertama" => 65, "nilai_kedua" => 90],
            ];

            $no = 1;
            foreach ($data_array as $data) {
                if ($data['program_studi'] == 'Informatika' || $data['program_studi'] == 'Akuntansi') {
                    $rata_rata = ($data['nilai_pertama'] + $data['nilai_kedua']) / 2;
                    $total_nilai = $data['nilai_pertama'] + $data['nilai_kedua'];
                    $lulus = $total_nilai > 150 ? "LULUS" : "TIDAK LULUS";
                    $row_class = $total_nilai > 150 ? "pass" : "fail";
                    echo "<tr class='{$row_class}'>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$data['nama_mahasiswa']}</td>";
                    echo "<td>{$data['program_studi']}</td>";
                    echo "<td>{$data['nilai_pertama']}</td>";
                    echo "<td>{$data['nilai_kedua']}</td>";
                    echo "<td>{$rata_rata}</td>";
                    echo "<td>{$total_nilai}</td>";
                    echo "<td>{$lulus}</td>";
                    echo '</tr>';
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>
