<?php
function pre(...$array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    die();
}

$kunci_jawaban = [
    '1' => [
        'skor' => '5',
        'kunci' => 'd',
    ],
    '2' => [
        'skor' => '7.5',
        'kunci' => 'a',
    ],
    '3' => [
        'skor' => '7.5',
        'kunci' => 'a',
    ],
    '4' => [
        'skor' => '10',
        'kunci' => 'c',
    ],
    '5' => [
        'skor' => '10',
        'kunci' => 'd',
    ],
    '6' => [
        'skor' => '10',
        'kunci' => 'c',
    ],
    '7' => [
        'skor' => '15',
        'kunci' => 'b',
    ],
    '8' => [
        'skor' => '10',
        'kunci' => 'c',
    ],
    '9' => [
        'skor' => '10',
        'kunci' => 'd',
    ],
    '10' => [
        'skor' => '15',
        'kunci' => 'd',
    ],
];
// pre($_POST['soal']);
$checked_jawaban = [];
$skor_siswa = 0;
$total_skor = 0;
foreach ($kunci_jawaban as $key => $value) {
    // pre($key, $_POST[$key] ?? null);
    if (!empty($_POST['soal'][$key])) {
        $post_value = $_POST['soal'][$key];
        $var_key = $key;
        $checked_jawaban[$key][$post_value] = 'checked';
        if ($post_value == $value['kunci']) {
            $skor_siswa += $value['skor'];
            $total_skor += $value['skor'];
        } else {
            $total_skor += $value['skor'];
        }
        // $checked_jawaban['$']['a']r_key$post_value = 'checked';
    } else {
        $total_skor += $value['skor'];
    }
    // pre($key);
}

// pre($checked_jawaban[9]['d']);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Tugas Web &mdash; Arruum Rahayu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">


    <div class="site-wrap">
        <section class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        &nbsp;
                    </div>
                    <div class="col-md-8 blog-content">
                        <div class="row">
                            <div class="col-6">
                                <img src="images/logo-umm/logo.png" style="width:100%; height:auto;">
                            </div>
                            <div class="col-6">
                                <img src="images/logo-umm/math-edu.png" style="width:100%; height:auto;">
                            </div>
                            <div clsas="col-12">
                                <h2 class="text-black mb-4">Latihan Soal</h2>
                                <h6>Nama : <?php echo $_POST['nama']; ?><h6>
                                        <h6>Asal Sekolah : <?php echo $_POST['asal_sekolah']; ?><h6>
                                                <h6>SKOR : <?php echo $skor_siswa . ' / ' . $total_skor; ?><h6>
                                                        <h6>
                                                            <a href="#" class="btn btn-primary" onclick="printHasil()">Cetak</a>
                                                            <h6>
                                                                <small>
                                                                    <a href="latihan-soal.php">Kembali kehalaman latihan</a>
                                                                </small>
                            </div>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="hasil.php">
                            <div class="row">
                                <div class="col-1">
                                    1.
                                </div>
                                <div class="col-11">
                                    <div class="table">
                                        <table class="table table-striped text-justify">
                                            <thead>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Definisi</th>
                                                <th class="text-center">Istilah</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="1%" class="text-center">1</td>
                                                    <td width="70%">
                                                        Nilai atau frekuensi yang paling sering
                                                        muncul dalam sekumpulan data
                                                    </td>
                                                    <td>
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>
                                                        Nilai tengah atau rata-rata dari dua angka yang berada di tengah dalam sekumpulan
                                                        data yang terurut
                                                    </td>
                                                    <td>
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>
                                                        Jumlah semua nilai dalam sekumpulan
                                                        data, kemudian dibagi dengan jumlah data
                                                        yang ada
                                                    </td>
                                                    <td>
                                                        &nbsp;
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <small>Skor (5)</small><br>
                                    Istilah yang tepat untuk definisi di atas adalah (Urut istilah 1,2,3 ). . .
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['1']['a'] ?? null) ?> name="soal[1]" id="soal1-a" value="a">
                                        <label class="form-check-label" for="soal1-a">
                                            A. Modus, mean, median
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['1']['b'] ?? null) ?> name="soal[1]" id="soal1-b" value="b">
                                        <label class="form-check-label" for="soal1-b">
                                            B. Median, modus, mean
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['1']['c'] ?? null) ?> name="soal[1]" id="soal1-c" value="c">
                                        <label class="form-check-label" for="soal1-c">
                                            C. Rata-rata, mean, median
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['1']['d'] ?? null) ?> name="soal[1]" id="soal1-d" value="d">
                                        <label class="form-check-label" for="soal1-d">
                                            D. Modus, median, mean
                                        </label>
                                    </div>
                                </div>
                                <div class="col-1">
                                    2.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Mean data 8, 10, 6, 7, 12, 5, 3, x adalah 8. Maka nilai x adalah ...
                                        <br>
                                        <small>Skor (7,5)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['2']['a'] ?? null) ?> name="soal[2]" id="soal2-a" value="a">
                                            <label class="form-check-label" for="soal2-a">
                                                A. 13
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['2']['b'] ?? null) ?> name="soal[2]" id="soal2-b" value="b">
                                            <label class="form-check-label" for="soal2-b">
                                                B. 12
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['2']['c'] ?? null) ?> name="soal[2]" id="soal2-c" value="c">
                                            <label class="form-check-label" for="soal2-c">
                                                c. 11
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['2']['d'] ?? null) ?> name="soal[2]" id="soal2-d" value="d">
                                            <label class="form-check-label" for="soal2-d">
                                                D. 10
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    3.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Jika modus dari data 2,3,3,4,5,4,,4,2,3 adalah 3, maka median data tersebut adalah...
                                        <br>
                                        <small>Skor (7.5)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['3']['a'] ?? null) ?> name="soal[3]" id="soal3-a" value="a">
                                            <label class="form-check-label" for="soal3-a">
                                                A. 3
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['3']['b'] ?? null) ?> name="soal[3]" id="soal3-b" value="b">
                                            <label class="form-check-label" for="soal3-b">
                                                B. 5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['3']['c'] ?? null) ?> name="soal[3]" id="soal3-c" value="c">
                                            <label class="form-check-label" for="soal3-c">
                                                C. 7
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['3']['d'] ?? null) ?> name="soal[3]" id="soal3-d" value="d">
                                            <label class="form-check-label" for="soal3-d">
                                                D. 4
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    4.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Nilai rata-rata mata pelajaran matematika dari 25 Siwa putri adalah 3 lebihnya dari 20 Siswa putra, sedangkan nilai rata-rata keseluruhan adalah . Nilai rata-rata siswa putri adalah...
                                        <br>
                                        <small>Skor (10)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['4']['a'] ?? null) ?> name="soal[4]" id="soal4-a" value="a">
                                            <label class="form-check-label" for="soal4-a">
                                                A. 65,5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['4']['b'] ?? null) ?> name="soal[4]" id="soal4-b" value="b">
                                            <label class="form-check-label" for="soal4-b">
                                                B. 55
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['4']['c'] ?? null) ?> name="soal[4]" id="soal4-c" value="c">
                                            <label class="form-check-label" for="soal4-c">
                                                C. 65
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['4']['d'] ?? null) ?> name="soal[4]" id="soal4-d" value="d">
                                            <label class="form-check-label" for="soal4-d">
                                                D. 75
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    5.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Dalam sebuah tes menunjukkan hasil sebagai berikut
                                        40% peserta memperoleh nilai 6, 20% memperoleh nilai 7, dan 30% memperoleh nilai 8. Sementara sisanya memperoleh nilai 9. Berdasarkan hasil tes tersebut susunan nilai mean, median, dan modus adalah …
                                        <br>
                                        <small>skor (10)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['5']['a'] ?? null) ?> name="soal[5]" id="soal5-a" value="a">
                                            <label class="form-check-label" for="soal5-a">
                                                A. Modus = Median < Mean </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['5']['b'] ?? null) ?> name="soal[5]" id="soal5-b" value="b">
                                            <label class="form-check-label" for="soal5-b">
                                                B. Modus > Median > Mean
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['5']['c'] ?? null) ?> name="soal[5]" id="soal5-c" value="c">
                                            <label class="form-check-label" for="soal5-c">
                                                C. Modus > Median < Mean </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['5']['d'] ?? null) ?> name="soal[5]" id="soal5-d" value="d">
                                            <label class="form-check-label" for="soal5-d">
                                                D. Modus < Median < Mean </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    6.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Dalam suatu kelas terdapat 50 orang siswa yang terdiri dari 30 siswa perempuan dan 20 siswa lelaki. Pada suatu hari diadakan ujian matematika, ternyata nilai rata-rata siswa perempuan adalah 8,0 dan rata-rata siswa lelaki adalah 7,0. Maka nilai rata-rata keseluruhan siswa adalah...
                                        <br>
                                        <small>Skor (10)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['6']['a'] ?? null) ?> name="soal[6]" id="soal6-a" value="a">
                                            <label class="form-check-label" for="soal6-a">
                                                A. 5,6
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['6']['b'] ?? null) ?> name="soal[6]" id="soal6-b" value="b">
                                            <label class="form-check-label" for="soal6-b">
                                                B. 6,6
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['6']['c'] ?? null) ?> name="soal[6]" id="soal6-c" value="c">
                                            <label class="form-check-label" for="soal6-c">
                                                C. 7,6
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['6']['d'] ?? null) ?> name="soal[6]" id="soal6-d" value="d">
                                            <label class="form-check-label" for="soal6-d">
                                                D. 8,6
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    7.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Dua kelompok anak yang masing-masing terdiri dari 44 orang memiliki tinggi badan rata-rata 150 cm dan 145 cm. Jika salah seorang anak dari masing-masing kelompok ditukarkan maka rata-rata tinggi badan kedua kelompok menjadi sama. Selisih tinggi badan anak yang ditukar adalah...cm
                                        <br>
                                        <small>skor (15)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['7']['a'] ?? null) ?> name="soal[7]" id="soal7-a" value="a">
                                            <label class="form-check-label" for="soal7-a">
                                                A. 20
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['7']['b'] ?? null) ?> name="soal[7]" id="soal7-b" value="b">
                                            <label class="form-check-label" for="soal7-b">
                                                B. 10
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['7']['c'] ?? null) ?> name="soal[7]" id="soal7-c" value="c">
                                            <label class="form-check-label" for="soal7-c">
                                                C. 5
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['7']['d'] ?? null) ?> name="soal[7]" id="soal7-d" value="d">
                                            <label class="form-check-label" for="soal7-d">
                                                D. 15
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    8.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        Rata-rata nilai matematika Yunus selama 5 kali adalah 75. Setelah ulangan yang ke-enam, rata rata nilai Yunus menjadi 77. Nilai ke-enam yang didapat yunus adalah . . .
                                        <br>
                                        <small>skor (10)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['8']['a'] ?? null) ?> name="soal[8]" id="soal8-a" value="a">
                                            <label class="form-check-label" for="soal8-a">
                                                D. 4
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['8']['b'] ?? null) ?> name="soal[8]" id="soal8-b" value="b">
                                            <label class="form-check-label" for="soal8-b">
                                                D. 4
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['8']['c'] ?? null) ?> name="soal[8]" id="soal8-c" value="c">
                                            <label class="form-check-label" for="soal8-c">
                                                D. 4
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['8']['d'] ?? null) ?> name="soal[8]" id="soal8-d" value="d">
                                            <label class="form-check-label" for="soal8-d">
                                                D. 4
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    9.
                                </div>
                                <div class="col-11">
                                    <div class="form-group">
                                        <div class="table">
                                            <table class="table table-striped text-center">
                                                <thead>
                                                    <th class="text-center">Berat Badan</th>
                                                    <th class="text-center">Banyak Siswa</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $data = [
                                                        '46' => '1',
                                                        '47' => '3',
                                                        '48' => '2',
                                                        '49' => '4',
                                                        '50' => '2',
                                                        '51' => '5',
                                                        '52' => '4',
                                                        '53' => '2',
                                                        '54' => '3',
                                                        '55' => '4',
                                                    ];
                                                    foreach ($data as $key => $value) {
                                                        echo "
                                                                <tr>
                                                                    <td>$key</td>
                                                                    <td>$value</td>
                                                                </tr>
                                                            ";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        Modus dan Median dari data di atas adalah . . .
                                        <br>
                                        <small>skor (10)</small>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['9']['a'] ?? null) ?> name="soal[9]" id="soal9-a" value="a">
                                            <label class="form-check-label" for="soal9-a">
                                                A. 51 dan 53
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['9']['b'] ?? null) ?> name="soal[9]" id="soal9-b" value="b">
                                            <label class="form-check-label" for="soal9-b">
                                                B. 51 dan 50
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['9']['c'] ?? null) ?> name="soal[9]" id="soal9-c" value="c">
                                            <label class="form-check-label" for="soal9-c">
                                                C. 51 dan 52
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['9']['d'] ?? null) ?> name="soal[9]" id="soal9-d" value="d">
                                            <label class="form-check-label" for="soal9-d">
                                                D. 51 dan 51
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    10.
                                </div>
                                <div class="col-11">
                                    Dari 50 orang siswa ada 20 orang yang mendapat nilai tidak lebih
                                    dari 46 dan ada 10 siswa mendapat nilai tidak kurang dari 76. Jika nilai yang
                                    dapat dicapai siswa adalah bilangan bulat dari 0 sampai 100, maka
                                    tentukanlah rata-rata maksimum yang mungkin dicapai...
                                    <br>
                                    <small>skor(10)</small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['10']['a'] ?? null) ?> name="soal[10]" id="soal10-a" value="a">
                                        <label class="form-check-label" for="soal10-a">
                                            A. 82
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['10']['b'] ?? null) ?> name="soal[10]" id="soal10-b" value="b">
                                        <label class="form-check-label" for="soal10-b">
                                            B. 78
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['10']['c'] ?? null) ?> name="soal[10]" id="soal10-c" value="c">
                                        <label class="form-check-label" for="soal10-c">
                                            C. 74
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" disabled <?php echo ($checked_jawaban['10']['d'] ?? null) ?> name="soal[10]" id="soal10-d" value="d">
                                        <label class="form-check-label" for="soal10-d">
                                            D. 68
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div> <!-- .site-wrap -->
    <script>
        function printHasil() {
            window.print();
        }
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <script src="js/main.js"></script>

</body>

</html>