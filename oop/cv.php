<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once 'Database.php';
    include_once 'Shcool.php';
    include_once 'User.php';

    $database = new Database();
    $db = $database->getConnection();

    $query = new User($db);
    $listuser = $query->getUser($_GET['id'])->fetchAll(PDO::FETCH_ASSOC);
    var_dump($listuser[0]['fullname']);

    $query2 = new Sekolah($db);
    $result = $query2->getSekolahByUser($_GET['id'])->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Sekolah</th>
                    <th>Tahun</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><?php echo $value['fullname']; ?></td>
                        <td><?php echo $value['nama_sekolah']; ?></td>
                        <td><?php echo $value['tahun']; ?></td>
                        <td><?php echo $value['nilai']; ?></td>
                    </tr>
            </tbody>
        <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>