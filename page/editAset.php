<?php
    include '../component/sidebar.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id_mobil=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM aset_mobil WHERE id_mobil=$id_mobil") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT ASET MOBIL</h4>
        <hr>
        <form action="../process/editAsetProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pemilik</label>
                <input type="hidden" name="id_mobil" value="<?php echo $data['id_mobil']; ?>">
                <input class="form-control" id="nama_pemilik" name="nama_pemilik" aria-describedby="emailHelp" value="<?php echo $data['nama_pemilik']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
                <input class="form-control" id="nama_mobil" name="nama_mobil" aria-describedby="emailHelp" value="<?php echo $data['nama_mobil']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe Mobil</label>
                <input class="form-control" id="tipe_mobil" name="tipe_mobil" aria-describedby="emailHelp" value="<?php echo $data['tipe_mobil']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
                <select class="form-select" aria-label="Default select example" name="jenis_transmisi" id="jenis_transmisi">
                    <?php
                        if($data['jenis_transmisi']=="Manual") {
                            echo '<option selected value="Manual">Manual</option>';
                            echo '<option value="Automatic">Automatic</option>';
                        }
                        else {
                            echo '<option value="Manual">Manual</option>';
                            echo '<option selected value="Automatic">Automatic</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Bahan Bakar</label>
                <input class="form-control" id="jenis_bahan_bakar" name="jenis_bahan_bakar" aria-describedby="emailHelp" value="<?php echo $data['jenis_bahan_bakar']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bahan Bakar</label>
                <input class="form-control" id="volume_bahan_bakar" name="volume_bahan_bakar" aria-describedby="emailHelp" value="<?php echo $data['volume_bahan_bakar']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warna Mobil</label>
                <input class="form-control" id="warna_mobil" name="warna_mobil" aria-describedby="emailHelp" value="<?php echo $data['warna_mobil']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kapasitas Penumpang</label>
                <input class="form-control" id="kapasitas_penumpang" name="kapasitas_penumpang" aria-describedby="emailHelp" value="<?php echo $data['kapasitas_penumpang']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fasilitas Mobil</label>
                <input class="form-control" id="fasilitas_mobil" name="fasilitas_mobil" aria-describedby="emailHelp" value="<?php echo $data['fasilitas_mobil']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
                <input class="form-control" id="plat_nomor" name="plat_nomor" aria-describedby="emailHelp" value="<?php echo $data['plat_nomor']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No STNK</label>
                <input class="form-control" id="no_stnk" name="no_stnk" aria-describedby="emailHelp" value="<?php echo $data['no_stnk']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Mobil</label>
                <select class="form-select" aria-label="Default select example" name="kategori_mobil" id="kategori_mobil">
                    <?php
                        if($data['kategori_mobil']=="Perusahaan") {
                            echo '<option selected value="Perusahaan">Perusahaan</option>';
                            echo '<option value="Mitra">Mitra</option>';
                        }
                        else {
                            echo '<option value="Perusahaan">Perusahaan</option>';
                            echo '<option selected value="Mitra">Mitra</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Periode Kontrak Mulai</label>
                <input type="date" name="periode_kontrak_mulai" id="periode_kontrak_mulai" class="form-control" value="<?php echo $data['periode_kontrak_mulai']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Periode Kontrak Akhir</label>
                <input type="date" name="periode_kontrak_akhir" id="periode_kontrak_akhir" class="form-control" value="<?php echo $data['periode_kontrak_akhir']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Terakhir Servis</label>
                <input type="date" name="tanggal_terakhir_servis" id="tanggal_terakhir_servis" class="form-control" value="<?php echo $data['tanggal_terakhir_servis']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bagasi</label>
                <input class="form-control" id="volume_bagasi" name="volume_bagasi" aria-describedby="emailHelp" value="<?php echo $data['volume_bagasi']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" id="harga_sewa" name="harga_sewa" aria-describedby="emailHelp" value="<?php echo $data['harga_sewa']; ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Ketersediaan</label>
                <input class="form-control" id="status_ketersediaan" name="status_ketersediaan" aria-describedby="emailHelp" value="<?php echo $data['status_ketersediaan']; ?>">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Edit Aset Mobil</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>