<?php
    include '../component/sidebar.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id_pegawai=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai=$id_pegawai") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT PEGAWAI</h4>
        <hr>
        <form action="../process/editPegawaiProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
                <input class="form-control" id="nama_pegawai" name="nama_pegawai" aria-describedby="emailHelp" value="<?php echo $data['nama_pegawai']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir_pegawai" name="tanggal_lahir_pegawai" aria-describedby="emailHelp" value="<?php echo $data['tanggal_lahir_pegawai'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin_pegawai" id="jenis_kelamin_pegawai">
                    <?php
                        if($data['jenis_kelamin_pegawai']=="L") {
                            echo '<option selected value="L">L</option>';
                            echo '<option value="P">P</option>';
                        }
                        else {
                            echo '<option value="L">L</option>';
                            echo '<option selected value="P">P</option>';
                        }
                    ?>
                </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email_pegawai" name="email_pegawai" aria-describedby="emailHelp" value="<?php echo $data['email_pegawai'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No Telp</label>
                <input class="form-control" id="no_telp_pegawai" name="no_telp_pegawai" aria-describedby="emailHelp" value="<?php echo $data['no_telp_pegawai'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" id="alamat_pegawai" name="alamat_pegawai" aria-describedby="emailHelp" value="<?php echo $data['alamat_pegawai'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input class="form-control" id="foto_pegawai" name="foto_pegawai" aria-describedby="emailHelp" value="<?php echo $data['foto_pegawai'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="id_role" id="id_role">
                    <?php
                        if($data['id_role']=="1") {
                            echo '<option selected value="1">'.$data['id_role'].'</option>';
                            echo '<option value="2">Admin</option>';
                            echo '<option value="3">CS</option>';
                        }
                        else if($data['id_role']=="2") {
                            echo '<option value="1">Manager</option>';
                            echo '<option selected value="2">'.$data['id_role'].'</option>';
                            echo '<option value="3">CS</option>';
                        }
                        else {
                            echo '<option value="1">Manager</option>';
                            echo '<option value="2">Admin</option>';
                            echo '<option selected value="3">'.$data['id_role'].'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password_pegawai" name="password_pegawai">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Edit Mahasiswa</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>