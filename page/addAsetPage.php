<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >TAMBAH ASET MOBIL</h4>
        <hr>
        <form action="../process/createAsetProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pemilik</label>
                <input class="form-control" id="nama_pemilik" name="nama_pemilik" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Mobil</label>
                <input class="form-control" id="nama_mobil" name="nama_mobil" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipe Mobil</label>
                <input class="form-control" id="tipe_mobil" name="tipe_mobil" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
                <select class="form-select" aria-label="Default select example" name="jenis_transmisi" id="jenis_transmisi">
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Bahan Bakar</label>
                <input class="form-control" id="jenis_bahan_bakar" name="jenis_bahan_bakar" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bahan Bakar</label>
                <input class="form-control" id="volume_bahan_bakar" name="volume_bahan_bakar" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Warna Mobil</label>
                <input class="form-control" id="warna_mobil" name="warna_mobil" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kapasitas Penumpang</label>
                <input class="form-control" id="kapasitas_penumpang" name="kapasitas_penumpang" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fasilitas Mobil</label>
                <input class="form-control" id="fasilitas_mobil" name="fasilitas_mobil" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
                <input class="form-control" id="plat_nomor" name="plat_nomor" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No STNK</label>
                <input class="form-control" id="no_stnk" name="no_stnk" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori Mobil</label>
                <select class="form-select" aria-label="Default select example" name="kategori_mobil" id="kategori_mobil">
                    <option value="Perusahaan">Perusahaan</option>
                    <option value="Mitra">Mitra</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Periode Kontrak Mulai</label>
                <input type="date" name="periode_kontrak_mulai" id="periode_kontrak_mulai" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Periode Kontrak Akhir</label>
                <input type="date" name="periode_kontrak_akhir" id="periode_kontrak_akhir" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Terakhir Servis</label>
                <input type="date" name="tanggal_terakhir_servis" id="tanggal_terakhir_servis" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Bagasi</label>
                <input class="form-control" id="volume_bagasi" name="volume_bagasi" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                <input class="form-control" id="harga_sewa" name="harga_sewa" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Ketersediaan</label>
                <input class="form-control" id="status_ketersediaan" name="status_ketersediaan" aria-describedby="emailHelp">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="register">Tambah Aset Mobil</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>