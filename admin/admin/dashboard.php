<?php
include"../config.php";

$today = date("Y-m-d");

$qryuser = mysql_query("select * from user");
$hasiluser = mysql_num_rows($qryuser);

$qrydiri = mysql_query("select * from diri");
$hasildiri = mysql_num_rows($qrydiri);

$qrycompany = mysql_query("select * from company");
$hasilcompany = mysql_num_rows($qrycompany);

$qrylowongan = mysql_query("select * from lowongan");
$hasillowongan = mysql_num_rows($qrylowongan);

$qrylowongandt = mysql_query("select * from lowongandt");
$hasillowongandt = mysql_num_rows($qrylowongandt);

$qrylowongandt1 = mysql_query("select * from lowongandt where tanggal='$today'");
$hasillowongandt1 = mysql_num_rows($qrylowongandt1);

$qryberita = mysql_query("select * from berita");
$hasilberita = mysql_num_rows($qryberita);

?>

<head>
    <link rel="stylesheet" href="../css/dashboard.css"> <!--alternatif-->
</head>

<div class="container-fluid">

    <div class="row" id="dashboard">

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box brown-bg">
          <div class="count"><?php echo $hasildiri; ?> Banner</div>
          <div class="title">Aktif</div> 
        </div><!--/.info-box-->     
      </div><!--/.col-->  

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box purple-bg">
          <div class="count"><?php echo $hasilcompany; ?> Event</div>
          <div class="title">Mendatang</div>            
        </div><!--/.info-box-->     
      </div><!--/.col-->

    </div><!--/.row-->

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box green-bg">
          <div class="count"><?php echo $hasillowongan; ?> Sharing</div>
          <div class="title">Telah Diposting</div>            
        </div><!--/.info-box-->     
      </div><!--/.col-->

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box red-bg">
          <div class="count"><?php echo $hasillowongandt; ?> Info</div>
          <div class="title">Telah Diposting</div>           
        </div><!--/.info-box-->     
      </div><!--/.col-->

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box orange-bg">
          <div class="count"><?php echo $hasillowongandt1; ?> Gallery</div>
          <div class="title">Telah Diposting</div>            
        </div><!--/.info-box-->     
      </div><!--/.col-->  

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box linkedin-bg">
          <div class="count"><?php echo $hasilberita; ?> COMMUNITY</div>
          <div class="title">Telah Diposting</div>            
        </div><!--/.info-box-->     
      </div><!--/.col--> 
      
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box yellow-bg">
          <div class="count"><?php echo $hasillowongandt1; ?> Team</div>
          <div class="title">Telah Bergabung</div>            
        </div><!--/.info-box-->     
      </div><!--/.col-->  

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="info-box teal-bg">
          <div class="count"><?php echo $hasilberita; ?> Author</div>
          <div class="title">Telah Bergabung</div>            
        </div><!--/.info-box-->     
      </div><!--/.col-->

    </div><!--/.row-->

</div>