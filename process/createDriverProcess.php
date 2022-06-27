<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id_driver = $_POST['id_driver'];
        $nama_driver = $_POST['nama_driver'];
        $alamat_driver = $_POST['alamat_driver'];
        $tanggal_lahir_driver = $_POST['tanggal_lahir_driver'];
        $jenis_kelamin_driver = $_POST['jenis_kelamin_driver'];
        $email_driver = $_POST['email_driver'];
        $no_telp_driver = $_POST['no_telp_driver'];
        $tarif_driver = $_POST['tarif_driver'];
        $rerata_rating_driver = $_POST['rerata_rating_driver'];
        $id_role = $_POST['id_role'];   
        $password_driver = password_hash($_POST['password_driver'], PASSWORD_DEFAULT);

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO pegawai(nama_pegawai, tanggal_lahir_pegawai, jenis_kelamin_pegawai, email_pegawai, no_telp_pegawai, alamat_pegawai, foto_pegawai, id_role, password_pegawai)
                VALUES
            ('$nama_pegawai', '$tanggal_lahir_pegawai', '$jenis_kelamin_pegawai', '$email_pegawai', '$no_telp_pegawai', '$alamat_pegawai', '$foto_pegawai', '$id_role', '$password_pegawai')") 
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo 
                '<script>
                    alert("Register Success"); window.location = "../page/listPegawaiPage.php"
                </script>';
        }else{
            echo 
                '<script>
                    alert("Register Failed");
                </script>';
        }
    }else{
        echo 
            '<script>
                window.history.back()
            </script>';
    }
?>