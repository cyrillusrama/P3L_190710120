<?php
    if(isset($_POST['edit'])){

        include('../db.php');

        $id_promo = $_POST['id_promo'];
        $kode_promo = $_POST['kode_promo'];
        $jenis_promo = $_POST['jenis_promo'];
        $keterangan_promo = $_POST['keterangan_promo'];
        $besar_diskon_promo = $_POST['besar_diskon_promo'];
        $status_promo = $_POST['status_promo'];;

        $query = mysqli_query($con, "UPDATE promo SET kode_promo='$kode_promo', jenis_promo='$jenis_promo', keterangan_promo='$keterangan_promo', besar_diskon_promo='$besar_diskon_promo', status_promo='$status_promo' WHERE id_promo='$id_promo'") or die(mysqli_error($con));

        if($query){
            echo
                '<script>alert("Data Berhasil Diedit !"); window.location = "../page/listPromoPage.php"</script>';
        }else{
            echo
                '<script>alert("Data Gagal Diedit !");</script>';
        }

    }else{
        echo
            '<script>window.history.back()</script>';
    }
?>