<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($conn,"select * from tabel_buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<h2>Pinjam Buku</h2>
<div class="row">
    <div class="col-md-4">
        <img src="gambar-buku.jpg" class="card-img-top">
    </div>
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$dt_buku['id_buku']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Buku</td><td><?=$dt_buku['Tabel_Buku']?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td><td><?=$dt_buku['Penerbit']?></td>
                    </tr>
                    <tr>
                        <td>Penulis</td><td><?=$dt_buku['Penulis']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pinjam</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Pinjam"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
