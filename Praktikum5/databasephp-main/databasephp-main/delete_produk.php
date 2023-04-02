<?php

    //Delete produk
        require_once 'dbkoneksi.php';
        $_iddel = $_GET['iddel'];
        $sql = "DELETE FROM produk WHERE id=?";
        $st = $dbh -> prepare ($sql);
        $st -> execute ([$_iddel]);

    //pengalihan halaman ketika sudah di delete
        header('location:list_produk.php');
?>