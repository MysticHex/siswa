<?php
include 'function.php';

$sql = "SELECT * FROM siswa";
$run = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        #tmbh{
            text-decoration: none;
            color: black;
            transition:0.3s;
        }
        #tmbh:hover{
            color:#0d6efd;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="mx-auto mt-3" style="width: fit-content;">
        <a href="index.php" style="text-decoration:none; color:black;"><h1 style="font-weight:bold;">Data siswa</h1></a>

        <?php if (isset($_GET['em']) || isset($_GET['sm'])) { ?>
            <?php if (isset($_GET['sm'])) { ?>
                <div class="alert alert-success text-center mb-0" role="alert">
                    <?= $_GET['sm']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['em'])) { ?>
                <div class="alert alert-danger text-center mb-0" role="alert">
                    <?= $_GET['em']; ?>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div style="height: 58px;"></div>
        <?php } ?>

        <?php if (isset($_GET['em']) != null || isset($_GET['sm']) != null) { ?>
            <script>
                if (performance.navigation.type === 1) {
                    window.location.href = 'index.php';
                }
            </script>
        <?php } ?>
        <a href="index_2.php" id="tmbh">+ Tambahkan Data</a>
    </div>
    <div class="mt-4">
        <table style="border:solid black 1px; width:800px" class="mx-auto">
            <thead>
                <tr>
                    <th style="width:fit-content; border:1px solid black;">Nama Lengkap</th>
                    <th style="width:fit-content; border:1px solid black;">Kelas</th>
                    <th style="width:fit-content; border:1px solid black;">Jurusan</th>
                    <th style="width:fit-content; border:1px solid black; text-align:center;">NIS</th>
                    <th style="width:fit-content; border:1px solid black; text-align:center;">NISN</th>
                    <th style="width:fit-content; border:1px solid black;">Jenis Kelamin</th>
                    <th style="width:fit-content; border:1px solid black; text-align:center;" colspan="2">Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($run)) { ?>
                    <tr>
                        <td style="border:1px solid black;"><?= $row['Nama_lengkap']; ?></td>
                        <td style="border:1px solid black;"><?= $row['Kelas']; ?></td>
                        <td style="border:1px solid black;"><?= $row['Jurusan']; ?></td>
                        <td style="border:1px solid black;"><?= $row['NIS']; ?></td>
                        <td style="border:1px solid black;"><?= $row['NISN']; ?></td>
                        <td style="border:1px solid black; text-align:center;"><?= $row['Jenis_kelamin']; ?></td>
                        <td style="border:1px solid black;"><a href="update.php?id=<?= $row['No'] ?>"><button type="button" class="btn btn-primary">Update</button></a></td>
                        <td style="border:1px solid black;"><a href="delete.php?id=<?= $row['No'] ?>" onclick="return confirm('Yakin untuk delete?')"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>