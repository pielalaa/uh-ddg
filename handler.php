<?php
    include_once 'koneksi.php';

    if (isset($_POST['add_user'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = $koneksi -> query ("INSERT INTO tabel_user (id, name, email, password)
        VALUES ($id, '$name', '$email', '$password')");

        if ($insert) {
            header ("Location: data_user.php");
        }
    }

    if (isset($_POST['daftar'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = $koneksi -> query ("INSERT INTO tabel_user (id, name, email, password)
        VALUES ($id, '$name', '$email', '$password')");

        if ($insert) {
            header ("Location: data_user.php");
        }
    }

    if (isset($_POST['admin'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = $koneksi -> query ("INSERT INTO tabel_admin (name, email, password)
        VALUES ('$name', '$email', '$password')");

        if ($insert) {
            header ("Location: data_admin.php");
        }
    }

    if (isset($_POST['edit_user'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $update = $koneksi -> query ("UPDATE tabel_user SET 
        name = '$name', 
        email = '$email', 
        password = '$password'
        WHERE id = $id
        ");

        if ($update) {
            header ("Location: data_admin.php");
        }
    }

    if (isset($_GET['delete'])) {
        $delete = $koneksi -> query ("DELETE FROM tabel_user WHERE id = '$_GET[id]'");

        if ($delete) {
            header ("Location: data_admin.php");
        }
    }
?>