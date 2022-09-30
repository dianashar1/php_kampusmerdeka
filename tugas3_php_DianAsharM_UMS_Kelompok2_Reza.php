<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php
    
    $mhs1 = ["nim" => "710190108", "nama" => "Dian", "nilai" => 95];
    $mhs2 = ["nim" => "710200100", "nama" => "Ashar", "nilai" => 85];
    $mhs3 = ["nim" => "710210111", "nama" => "Maruf", "nilai" => 55];
    $mhs4 = ["nim" => "710180123", "nama" => "Ovi", "nilai" => 45];
    $mhs5 = ["nim" => "710170090", "nama" => "Ahmad", "nilai" => 90];
    $mhs6 = ["nim" => "710200101", "nama" => "Fuadah", "nilai" => 100];
    $mhs7 = ["nim" => "710210001", "nama" => "Novi", "nilai" => 80];
    $mhs8 = ["nim" => "710220020", "nama" => "Aulia", "nilai" => 90];
    $mhs9 = ["nim" => "710180100", "nama" => "Rahma", "nilai" => 50];
    $mhs10 = ["nim" => "710160132", "nama" => "Danti", "nilai" => 90];

    $mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];
    $titles = ["No", "NIM", "Nama", "Nilai", "Keterangan", "Grade", "Predikat"];
    ?>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Data Nilai Mahasiswa</h1>
        <table class="table table-bordered table-striped table-warning">
            <thead>
                <tr>
                    <?php
                    foreach ($titles as $title) { ?>
                        <th><?= $title ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                    $nim = $mhs['nim'];
                    $nama = $mhs['nama'];
                    $nilai = $mhs['nilai'];
                    $keterangan = ($nilai >= 60) ? "Lulus" : "Gagal";

                    if ($nilai >= 90 && $nilai <= 100) {
                        $grade ="A";
                    } elseif ($nilai >= 80 && $nilai < 90) {
                        $grade ="B";
                    } elseif ($nilai >= 70 && $nilai < 80) {
                        $grade ="C";
                    } elseif ($nilai >= 60 && $nilai < 70) {
                        $grade ="D";
                    } else {
                        $grade = "E";
                    }

                    switch ($grade) {
                        case 'A':
                            $predikat = "Memuaskan";
                            break;
                        
                        case 'B':
                            $predikat = "Baik";
                            break;
                        
                        case 'C':
                            $predikat = "Cukup";
                            break;
                        
                        case 'D':
                            $predikat = "Kurang";
                            break;
                        
                        default:
                            $predikat = "Buruk";
                            break;   
                    }
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php  
                $jumlahMahasiswa = count($mahasiswa);
                $kumpulanNilai = array_column($mahasiswa, "nilai");
                $totalNilai = array_sum($kumpulanNilai);
                $nilaiTerbesar = max($kumpulanNilai);
                $nilaiTerkecil = min($kumpulanNilai);
                $ratarata = $totalNilai / $jumlahMahasiswa;

                $tfoot = [
                    "Jumlah Mahasiswa" => $jumlahMahasiswa,
                    "Nilai Terbesar" => $nilaiTerbesar,
                    "Nilai Terkecil" => $nilaiTerkecil,
                    "Rata - Rata" => $ratarata,
                    "Jumlah Siswa" => $jumlahMahasiswa
                ];
                foreach ($tfoot as $key => $value) { ?>
                    <tr>
                        <th colspan="4"><?= $key ?></th>
                        <th colspan="3"><?= $value ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
<h3 align="center"> Dian Ashar Ma'ruf</h3>
<h3 align="center"> Universitas Muhammadiyah Surakarta </h3>
<h3 align="center"> Kelompok 2 dgn Mentor Bp Reza</h3>
                    
</html>
