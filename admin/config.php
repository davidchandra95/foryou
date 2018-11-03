<?php
//connect.php
//untuk mengakses database

$Open = mysql_connect("localhost","root","");
            if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !<br>");
                }
$Koneksi = mysql_select_db("pcmj");
            if (!$Koneksi){
            die ("Koneksi ke Database Gagal !");
            }

?>