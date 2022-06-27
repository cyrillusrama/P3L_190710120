<?php
    include '../component/sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>DAFTAR PEGAWAI</h4>
        <hr>
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM pegawai") or die(mysqli_error($con));
                
                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }else{
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                    echo'
                        <tr>
                            <th scope="row">'.$no.'</th>
                            <td>'.$data['nama_pegawai'].'</td>
                            <td>'.$data['tanggal_lahir_pegawai'].'</td>
                            <td>'.$data['jenis_kelamin_pegawai'].'</td>
                            <td>'.$data['email_pegawai'].'</td>
                            <td>'.$data['no_telp_pegawai'].'</td>
                            <td>'.$data['alamat_pegawai'].'</td>
                            <td>'.$data['foto_pegawai'].'</td>
                            <td>'.$data['id_role'].'</td>
                            <td>
                                 <a href="./editPegawai.php?id='.$data['id_pegawai'].'"><i style="color: green" class="fa fa-edit"></i></a>
                                <a href="../process/deletePegawaiProcess.php?id='.$data['id_pegawai'].'" onClick="return confirm ( \'Yakin?\')">
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