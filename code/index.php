<!DOCTYPE html>
<html>
<head>
  <title>Responsi Teknologi Cloud Computing Lanjut | www.github.com/ahmadqo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="content">
  	<header>
  		<h1 class="judul">www.github.com/ahmadqo</h1>
  		<h2 class="deskripsi">Responsi Teknologi Cloud Computing Lanjut</h>
  	</header>
  	<div class="menu">
  		<ul>
  			<li><a href="index.php?page=home">HOME</a></li>
  			<li><a href="index.php?page=tentang">ABOUT</a></li>
  		</ul>
  	</div>
  	<div class="badan">
    	<?php
      	if(isset($_GET['page'])){
      		$page = $_GET['page'];
      		switch ($page) {
      			case 'home':
      				include "home.php";
      				break;
      			case 'tentang':
      				include "tentang.php";
      				break;
      			default:
      				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
      				break;
      		}
      	}else{
      		include "home.php";
      	}
    	?>
  	</div>
  </div>
</body>
</html>
