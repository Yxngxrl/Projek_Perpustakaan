<?php
if($_POST){
    $tabel_buku=$_POST['tabel_buku'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    if(empty($tabel_buku)){
        echo "<script>alert('Judul Buku tidak boleh kosong');location.href='tambahbuku.php';</script>";
    } elseif(empty($penulis)){
        echo "<script>alert('Penulis tidak boleh kosong');location.href='tambahbuku.php';</script>";
    } elseif(empty($penerbit)){
        echo "<script>alert('Penerbit tidak boleh kosong');location.href='tambahbuku.php';</script>";
    } else {        
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_buku (tabel_buku,penulis,penerbit) value ('".$tabel_buku."','".$penulis."','".$penerbit."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Buku <3');location.href='tambahbuku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Buku :(');location.href='tambahbuku.php';</script>";
        }
    }
}
?>