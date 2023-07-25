<?php
include_once('config.php');

$sql = "SELECT * FROM scores, students WHERE scores.student_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header class="bg-light fixed-top z-n col-12">
        <div class="container">
            <div class="row">
                <div class="col position-absolute">
                    <a href="#" class="text-decoration-none">
                        <p class="fw-bolder mt-2 text-dark-emphasis hover">RPL 56</p>
                    </a>
                </div>
                <div class="col">
                    <ul class="nav nav-tabs justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasks.html">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="analytics.html">Analytics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Report!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row align-items-start pt-5">
                <div class="col-4 sticky-top z-0 top">
                    <hr>
                    <h3 class="p-2">Input Data</h3>
                    <hr>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="name">Nama :</label>
                            <input id="nama" type="text" name="nama" class="form-control" placeholder="Budi">
                        </div>
                        <div class="mb-3">
                            <label for="nilai">Nilai :</label>
                            <input id="nilai" type="number" name="nilai" class="form-control" placeholder="0-100" min="0" max="100">
                        </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </form>
                    <? var_dump("form"); ?>
                </div>

                <div class="col-8">
                    <hr>
                    <h3>Daftar Rangking Kelas XI RPL</h3>
                    <hr>
                    <table class="table table-bordered table-striped">
                        <thead class="table-secondary text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key => $d) : ?>
                                <tr>
                                    <th scope="col"><?= $key + 1 ?></td>
                                    <td><?= $d['name'] ?></td>
                                    <td><?= $d['score'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot class="table-secondary">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-light text-center">
        <div class="text-center p-3">
            <div class="sosmed">
                <a href="https://www.instagram.com/osismpk10.jkt/"><img src="assets/Instagram.png" width="20px" height="20px" alt=""></a>
                <a href="https://smkn10jakarta.sch.id"><img src="assets/Website.png" width="20px" height="20px" class="ms-2" alt=""></a>
                <a href="https://www.google.com/maps/dir//SMK+Negeri+10+Jakarta,+Jl.+Mayjen+Sutoyo,+RT.7%2FRW.7,+Cawang,+Kec.+Kramat+jati,+Kota+Jakarta+Timur,+Daerah+Khusus+Ibukota+Jakarta/@-6.2558317,106.8676189,17z/data=!4m17!1m7!3m6!1s0x2e69f301ea1c2901:0xfc9931c7b0225846!2sSMK+Negeri+10+Jakarta!8m2!3d-6.2558317!4d106.8698076!16s%2Fg%2F11bwf0vcrq!4m8!1m0!1m5!1m1!1s0x2e69f301ea1c2901:0xfc9931c7b0225846!2m2!1d106.8698076!2d-6.2558317!3e2?entry=ttu"><img src="assets/Location.png" width="20px" height="20px" class="m-2" alt=""></a>
            </div>
            <span class="fw-bolder">©2023 Copyright:</span>
            <a class="text-dark text-decoration-none fw-bold" href="index.html">SMKN10JKT.COM</a>
        </div>
    </footer>
</body>

</html>