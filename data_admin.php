<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Data Pengguna</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>

    <body style="min-height: 100vh; display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <?php 
            include_once 'koneksi.php';
            $data = $koneksi -> query ("SELECT * FROM tabel_user");
        ?>

        <table class="table" style="width: 70%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
                foreach ($data as $item) {
            ?>
                <tr>
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $item['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="handler.php?delete=1&id=<?php echo $item['id'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
        <br>
        <div>
            <a href="data_user.php" class="btn btn-warning">Kembali</a>
            <a href="add_user.php" class="btn btn-success">Tambahkan Pengguna</a>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>