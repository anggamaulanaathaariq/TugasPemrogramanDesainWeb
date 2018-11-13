<?php
require 'functions.php';
if(isset($_POST['submit']))
{
    if(isset($_POST['submit']))
    {
        if(tambah($_POST)>0)
        {
            echo "
            <script>
            alert('data berhasil disimpan');
            document.location.href='index.php';
            </script>

            ";
        }else{
            echo"
            <script>
            alert('data gagal disimpan');
            document.location.href='tambah.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        } 
    }
}
?>
