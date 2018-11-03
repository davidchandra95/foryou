<?php
	if(isset($_GET['p']))
	{
		$p = $_GET['p'];
		if ($p == 'banner'){
			include"banner/banner.php";
		}
		else if ($p == 'event'){
			include"event/event.php";
		}
		else if ($p == 'info'){
			include"info/info.php";
		}
		else if ($p == 'community'){
			include"community/community.php";
		}
		else if ($p == 'tim'){
			include"tim/tim.php";
		}
		else if ($p == 'author'){
			include"author/author.php";
		}
		else if ($p == 'hiring'){
			include"hiring/hiring.php";
		}
		else if ($p == 'about'){
			include"about.php";
		}
		else if ($p == 'contact'){
			include"contact.php";
		}
		else if ($p == 'app'){
			include"app.php";
		}
		else if ($p == 'pencarikerjaadmin'){
			include"admin/pencari/pencari.php";
		}
		else if ($p == 'pemberikerjaadmin'){
			include"admin/pemberi/pemberi.php";
		}
		else if ($p == 'lokeradmin'){
			include"admin/lowongan/lowongan.php";
		}
		else if ($p == 'tambahuser'){
			include"admin/user/user.php";
		}
		else if ($p == 'pengaturan'){
			include"admin/pengaturan.php";
		}
	}else{}
?>