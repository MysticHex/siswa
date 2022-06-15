<?php
    include 'function.php';
    $id = (isset($_GET['id'])) ? $_GET['id'] :null;

    $sql="DELETE FROM siswa WHERE `No` =$id";
    $run=mysqli_query($conn,$sql);

    if($run){
        header('location:index.php?sm=Delete berhasil');
    }else{
        header('location:index.php?em=Error');
    }
?>
