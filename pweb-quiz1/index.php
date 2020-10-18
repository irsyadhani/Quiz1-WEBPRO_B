<?php include("quiz1/header.php");?>


	<?php
		if(@$_GET ['p'] !=""){
			include ("".$_GET['p'].".html");
		}else{
			include ("quiz1.html");
		}
	?>
	<!--id id katgeori nama merk jenis desk gambar size harga -->
<?php include("quiz1/footer.php");?>	