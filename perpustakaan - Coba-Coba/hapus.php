<?php 
    if($_GET['id_siswa']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from siswa where id_siswa='".$_GET['id_siswa']."'");
        if($qry_hapus){
            echo "<script>alert('Yeaayyy~ sukses menghapus data <3');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Yahh~ Gagal deh.. :(');location.href='tampil_siswa.php';</script>";
        }
    }
?>
