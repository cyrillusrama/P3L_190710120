<?php
    if(isset($_POST['edit'])){

        include('../db.php');

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

        $query = mysqli_query($con, "UPDATE aset_mobil SET nama_pemilik='$nama_pemilik', 
        nama_mobil='$nama_mobil', tipe_mobil='$tipe_mobil', 
        jenis_transmisi='$jenis_transmisi', jenis_bahan_bakar='$jenis_bahan_bakar', volume_bahan_bakar='$volume_bahan_bakar', 
        warna_mobil='$warna_mobil', kapasitas_penumpang='$kapasitas_penumpang', fasilitas_mobil='$fasilitas_mobil', 
        plat_nomor='$plat_nomor', no_stnk='$no_stnk', kategori_mobil='$kategori_mobil', 
        periode_kontrak_mulai='$periode_kontrak_mulai', periode_kontrak_akhir='$periode_kontrak_akhir', volume_bagasi='$volume_bagasi', 
        harga_sewa='$harga_sewa', status_ketersediaan='$status_ketersediaan' WHERE id_mobil='$id_mobil'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Berhasil Diedit !"); window.location = "../page/listAsetPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>