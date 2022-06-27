<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >TAMBAH PEGAWAI</h4>
        <hr>
        <form action="../process/createPegawaiProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input class="form-control" id="nama_pegawai" name="nama_pegawai" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_pegawai" name="tanggal_lahir_pegawai" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin_pegawai" id="jenis_kelamin_pegawai">
                    <option value="P">P</option>
                    <option value="L">L</option>
                </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email_pegawai" name="email_pegawai" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telp</label>
                <input class="form-control" id="no_telp_pegawai" name="no_telp_pegawai" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" id="alamat_pegawai" name="alamat_pegawai" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input class="form-control" id="foto_pegawai" name="foto_pegawai" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="id_role" id="id_role">
                    <option value="1">Manager</option>
                    <option value="2">Admin</option>
                    <option value="3">CS</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password_pegawai" name="password_pegawai">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="register">Tambah Pegawai</button>
            </div>
            </form>
        </div>
        </aside>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>