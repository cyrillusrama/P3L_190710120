<?php
    if(isset($_POST['edit'])){

        include('../db.php');

        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
        $jenis_kelamin_pegawai = $_POST['jenis_kelamin_pegawai'];
        $email_pegawai = $_POST['email_pegawai'];
        $no_telp_pegawai = $_POST['no_telp_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $foto_pegawai = $_POST['foto_pegawai'];
        $id_role = $_POST['id_role'];
        $password_pegawai = password_hash($_POST['password_pegawai'], PASSWORD_DEFAULT);

        $query = mysqli_query($con, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', tanggal_lahir_pegawai='$tanggal_lahir_pegawai', jenis_kelamin_pegawai='$jenis_kelamin_pegawai', email_pegawai='$email_pegawai', no_telp_pegawai='$no_telp_pegawai', alamat_pegawai='$alamat_pegawai', foto_pegawai='$foto_pegawai', id_role='$id_role' WHERE id_pegawai='$id_pegawai'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Berhasil Diedit !"); window.location = "../page/listPegawaiPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>