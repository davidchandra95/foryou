<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin PCMJ</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
 
  <body>
 
      
      <div id="login-page">
        <div class="container">
            <form class="form-login" action="login.php" method="POST">
                <h2 class="form-login-heading">LOGIN ADMIN PCMJ</h2>
                <div class="login-wrap">
                    <input type="text" name="username" class="form-control" placeholder="User ID" autofocus required>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <br>
                    <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <br>
            </form>

                    

                    <hr>
                    
                    <div class="registration">
                        <br>
                        Copyright © 2018 | Julius Gonawan
                        <br>
                        All Rights Reserved
                    </div>
         
                </div>
            
        </div>
    </div>

    <!--modal konfirmasi-->
    <div class="modal fade" id="modalkonfirmasi" >
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class ="modal-body" id="pesan">
                </div>

                <div class="modal-footer">
                <button class="btn btn-default btn-primary" data-dismiss="modal">Kembali</button>
                </div>

            </div>
        </div>
    </div>
    <!--modal-->

    <script type="text/javascript">
    $("#email").submit(function(event) {
    
    event.preventDefault();


    var form = $('#email');
    var formData = $(form).serialize();
   


    //"nama=" +nama+ "&usernamekini=" +usernamekini

    //var usernamekini = $("#usernamekini").val();
    //var nama = $("#nama").val();
    //var jk= $('#jk').val();   

    $.ajax
    ({
        type: 'POST',
        url: "perintah_kirim_email.php",
        dataType : 'html',
        data: formData,
        success: function(data) 
        {   
            if(data==0){
                $('#modalemail').modal('hide');
                $('#modalkonfirmasi').modal('show');
                $("#pesan").html("<code>Tidak menemukan alamat email yang dimasukkan</code>");
            }
            else if(data==1)
            {
                $('#modalemail').modal('hide');
                $('#modalkonfirmasi').modal('show');
                $("#pesan").html("<mark>Password telah dikirimkan ke email anda. Silahkan buka email anda</mark>");
            }
            else if(data==2)
            {
                $('#modalemail').modal('hide');
                $('#modalkonfirmasi').modal('show');
                $("#pesan").html("<mark>Gagal mengirim pesan, silahkan coba lagi atau hubungi pihak sekolah untuk mendapatkan password anda</mark>");   
            }
            
        }
        });         
    });
    </script>

  </body>
</html>