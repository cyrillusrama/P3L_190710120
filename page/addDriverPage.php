<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >TAMBAH PEGAWAI</h4>
        <hr>
        <form action="../process/createDriverProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" id="nama_driver" name="nama_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" id="alamat_driver" name="alamat_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_driver" name="tanggal_lahir_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin_driver" id="jenis_kelamin_driver">
                    <option value="P">P</option>
                    <option value="L">L</option>
                </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email_driver" name="email_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telp</label>
                <input class="form-control" id="no_telp_driver" name="no_telp_driver" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tarif</label>
                <input class="form-control" id="tarif_driver" name="tarif_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rerata Rating</label>
                <input class="form-control" id="rerata_rating_driver" name="rerata_rating_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SIM</label>
                <input class="form-control" id="sim_driver" name="sim_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bebas Napsa</label>
                <input class="form-control" id="bebas_napsa_driver" name="bebas_napsa_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kesehatan Jiwa</label>
                <input class="form-control" id="kesehatan_jiwa_driver" name="kesehatan_jiwa_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">SKCK</label>
                <input class="form-control" id="skck_driver" name="skck_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bahasa</label>
                <input class="form-control" id="bahasa_driver" name="bahasa_driver" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Promo</label>
                <select class="form-select" aria-label="Default select example" name="status_driver" id="status_driver">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password_driver" name="password_driver">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="register">Tambah Driver</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>