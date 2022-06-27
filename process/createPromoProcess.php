<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id_promo = $_POST['id_promo'];
        $kode_promo = $_POST['kode_promo'];
        $jenis_promo = $_POST['jenis_promo'];
        $keterangan_promo = $_POST['keterangan_promo'];
        $besar_diskon_promo = $_POST['besar_diskon_promo'];
        $status_promo = $_POST['status_promo'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO promo(kode_promo, jenis_promo, keterangan_promo, besar_diskon_promo, status_promo)
                VALUES
            ('$kode_promo', '$jenis_promo', '$keterangan_promo', '$besar_diskon_promo', '$status_promo')") 
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($query){
            echo 
                '<script>
                    alert("Register Success"); window.location = "../page/listPromoPage.php"
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