<?php
    if(isset($_GET['id'])){
        include ('../db.php');
        $id_pegawai = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'") or die(mysqli_error($con));
        if($queryDelete){
            echo '<script>alert("Delete Success"); window.location = "../page/listPegawaiPage.php"</script>';
        }else{
            echo '<script>alert("Delete Failed"); window.location = "../page/listPegawaiPage.php"</script>';
        }
    }else{
        echo '<script>window.history.back()</script>';
    }
?>
