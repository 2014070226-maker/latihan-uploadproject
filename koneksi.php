<?php
$koneksi = mysqli_connect("localhost","root","mysql","data");
// ----- mysql di atas ini bs berubah
echo "koneksi berhasil";
if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>