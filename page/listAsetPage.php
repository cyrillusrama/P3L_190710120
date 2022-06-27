<?php
    include '../component/sidebar.php'

?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>DAFTAR ASET MOBIL</h4>
        <hr>
        <form action="" method="post">
                <input type= "text" name= "keyword" size="40" autofocus placeholder= "Cari Data..." autocomplete= "off">
                <button type= "submit" name= "cari">Cari!</button>
        </form> 
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemilik</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Jenis Transmisi</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">No STNK</th>
                    <th scope="col">Kategori Mobil</th>
                    <th scope="col">Mulai Kontrak</th>
                    <th scope="col">Selesai Kontrak</th>
                    <th scope="col">Terakhir Servis</th>
                    <th scope="col">Harga Sewa</th>
                    <th scope="col">Status Ketersediaan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM aset_mobil") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['nama_pemilik'].'</td>
                            <td>'.$data['nama_mobil'].'</td>
                            <td>'.$data['tipe_mobil'].'</td>
                            <td>'.$data['jenis_transmisi'].'</td>
                            <td>'.$data['warna_mobil'].'</td>
                            <td>'.$data['plat_nomor'].'</td>
                            <td>'.$data['no_stnk'].'</td>
                            <td>'.$data['kategori_mobil'].'</td>
                            <td>'.$data['periode_kontrak_mulai'].'</td>
                            <td>'.$data['periode_kontrak_akhir'].'</td>
                            <td>'.$data['tanggal_terakhir_servis'].'</td>
                            <td>'.$data['harga_sewa'].'</td>
                            <td>'.$data['status_ketersediaan'].'</td>
                            
                            <td>
                                 <a href="./editAset.php?id='.$data['id_mobil'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deleteAsetProcess.php?id='.$data['id_mobil'].'" onClick="return confirm ( \'Yakin?\')">
                                    <i style="color: red" class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>';
                    $no++;
                    }
                }

            ?>
            </tbody>
            </table>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

