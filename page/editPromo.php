<?php
    include '../component/sidebar.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id_promo=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM promo WHERE id_promo=$id_promo") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT PEGAWAI</h4>
        <hr>
        <form action="../process/editPromoProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Promo</label>
                <input type="hidden" name="id_promo" value="<?php echo $data['id_promo']; ?>">
                <input class="form-control" id="kode_promo" name="kode_promo" aria-describedby="emailHelp" value="<?php echo $data['kode_promo']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Promo</label>
                <input class="form-control" id="jenis_promo" name="jenis_promo" aria-describedby="emailHelp" value="<?php echo $data['jenis_promo'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Promo</label>
                <select class="form-select" aria-label="Default select example" name="status_promo" id="status_promo">
                    <?php
                        if($data['status_promo']=="aktif") {
                            echo '<option selected value="aktif">Aktif</option>';
                            echo '<option value="tidak aktif">Tidak Aktif</option>';
                        }
                        else {
                            echo '<option value="aktif">Aktif</option>';
                            echo '<option selected value="tidak aktif">Tidak Aktif</option>';
                        }
                    ?>
                </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan Promo</label>
                <input class="form-control" id="keterangan_promo" name="keterangan_promo" aria-describedby="emailHelp" value="<?php echo $data['keterangan_promo'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Besar Diskon Promo</label>
                <input class="form-control" id="besar_diskon_promo" name="besar_diskon_promo" aria-describedby="emailHelp" value="<?php echo $data['besar_diskon_promo'] ?>">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="edit">Edit Promo</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>