<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id_mobil = $_POST['id_mobil'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $nama_mobil = $_POST['nama_mobil'];
        $tipe_mobil = $_POST['tipe_mobil'];
        $jenis_transmisi = $_POST['jenis_transmisi'];
        $jenis_bahan_bakar = $_POST['jenis_bahan_bakar'];
        $volume_bahan_bakar = $_POST['volume_bahan_bakar'];
        $warna_mobil = $_POST['warna_mobil'];
        $kapasitas_penumpang = $_POST['kapasitas_penumpang'];
        $fasilitas_mobil = $_POST['fasilitas_mobil'];
        $plat_nomor = $_POST['plat_nomor'];
        $no_stnk = $_POST['no_stnk'];
        $kategori_mobil = $_POST['kategori_mobil'];
        $periode_kontrak_mulai = $_POST['periode_kontrak_mulai'];
        $periode_kontrak_akhir = $_POST['periode_kontrak_akhir'];
        $volume_bagasi = $_POST['volume_bagasi'];
        $harga_sewa = $_POST['harga_sewa'];
        $status_ketersediaan = $_POST['status_ketersediaan'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO aset_mobil(nama_pemilik, nama_mobil, tipe_mobil, jenis_transmisi, jenis_bahan_bakar, volume_bahan_bakar,
            warna_mobil, kapasitas_penumpang, fasilitas_mobil, plat_nomor, no_stnk, kategori_mobil,
            periode_kontrak_mulai, periode_kontrak_akhir, volume_bagasi, harga_sewa, status_ketersediaan)
                VALUES
            ('$nama_pemilik', '$nama_mobil', '$tipe_mobil', '$jenis_transmisi', '$jenis_bahan_bakar', '$volume_bahan_bakar',
            '$warna_mobil', '$kapasitas_penumpang', '$fasilitas_mobil', '$plat_nomor', '$no_stnk', '$kategori_mobil',
            '$periode_kontrak_mulai', '$periode_kontrak_akhir', '$volume_bagasi', '$harga_sewa', '$status_ketersediaan')") 
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo 
                '<script>
                    alert("Tambah Aset Berhasil"); window.location = "../page/listAsetPage.php"
                </script>';
        }else{
            echo 
                '<script>
                    alert("Tambah Aset Gagal");
                </script>';
        }
    }else{
        echo 
            '<script>
                window.history.back()
            </script>';
    }
?>