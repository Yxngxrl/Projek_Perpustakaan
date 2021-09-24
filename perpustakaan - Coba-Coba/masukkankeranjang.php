<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $qry_get_buku=mysqli_query($conn,"select * from tabel_buku where id_buku = '".$_GET['id_buku']."'");
        $dt_buku=mysqli_fetch_array($qry_get_buku);
        $_SESSION['cart'][]=array(
            'ID_Buku'=>$dt_buku['ID_Buku'],
            'Tabel_Buku'=>$dt_buku['Tabel_Buku'],
            'qty'=>$_POST['jumlah_pinjam']
        );
    }
    header('location: keranjang.php');
?>