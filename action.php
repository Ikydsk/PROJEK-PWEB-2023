<?php
    $data['nama']       =$_POST['nama'];
    $data['email']      =$_POST['email'];
    $data['pass']       =$_POST['pass'];
    $data['alamat']     =$_POST['alamat'];
    $data['nim']        =$_POST['nim'];
    $data['kelas']      =$_POST['kelas'];

    echo "<br>";
    echo $data['nama'];
    echo "<br>";
    echo $data['nim'];
    echo "<br>";
    echo $data['kelas'];
    echo "<br>";
    echo $data['email'];
    echo "<br>";
    echo $data['pass'];
    echo "<br>";
    echo $data['alamat'];
?>