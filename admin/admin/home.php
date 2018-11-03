
<html>
	<head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">/
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="stylehome.css">
    <link rel="stylesheet" href="../css/elegantfont/style.css">
    <link rel="stylesheet" href="../css/fontawesome/css/font-awesome.css"> 
    <link rel="stylesheet" href="../datepicker/css/bootstrap-datepicker3.css">

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/newssticker/jquery.newsTicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../validator/dist/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="../datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/jquery.form.js"></script>
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../ckeditor/styles.js"></script>
	
    </head>

	<body>

        <!--Mengecek apakah sudah login atau belum?-->
        <?php
            session_start();
            if(!isset($_SESSION['login'])) {
                header("location: ../index.php");
            }
        ?>
	    <!---->

        <div class="navbar navbar-default navbar-fixed-top">

                <div class="container-fluid">

                    <div class="navbar-header">


                        <div class="navbar-brand"><a href="#" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-list"></span></a>
                        <a href="home.php" id="tulisan">ADMIN PCMJ</a> </div>

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#profil">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>                          
                
                    </div>

                    <div class="collapse navbar-collapse" id="profil">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" >Hi, Admin<b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <li><a href="home.php?p=tim"><i class="icon_profile"></i><span> Tim</span></a></li>
                                    <li><a href="home.php?p=author"><i class="icon_profile"></i><span> Author</span></a></li>
                                    <li><a href="home.php?p=hiring"><i class="icon_profile"></i><span> Hiring</span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="home.php?p=about"><i class="icon_profile"></i><span> About Us</span></a></li>
                                    <li><a href="home.php?p=contact"><i class="icon_profile"></i><span> Contact Us</span></a></li>
                                    <li><a href="home.php?p=app"><i class="icon_profile"></i><span> App</span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php"><i class="icon_lock_alt"></i><span> Logout</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
        </div>

        <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
         
            <ul class="sidebar-nav">

                <li>
                    <a href="home.php"> Dashboard</a>
                </li>
                <li>
                    <a href="?p=banner"> Banner</a>
                </li>
                <li>
                    <a href="?p=event"> Event</a>
                </li>
                <li>
                    <a href="?p=sharing"> Sharing</a>
                </li>
                <li>
                    <a href="?p=info"> News</a>
                </li>
                <li>
                    <a href="?p=gallery"> Gallery</a>
                </li>
                <li>
                    <a href="?p=community"> Community</a>
                </li>


                
            </ul>
          
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!--<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">-->
                        <?php
                        if(isset($_GET['p']))
                        {
                            include"call.php";
                        }
                        else
                        {
                            include"dashboard.php";
                        }
                        ?>
                <!--</div>
                </div>
            </div>-->
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->




         <script>
            $("#menu-toggle").click(function(e) {
             e.preventDefault();
            $("#wrapper").toggleClass("toggled");
         });

    </script>

        
    </body>