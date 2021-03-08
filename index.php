<!DOCTYPE HTML>
<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="index.css" />
		<script type="text/javascript">
			function myFunction() {
				var dots = document.getElementById("dots");
				var moreText = document.getElementById("more");
				var btnText = document.getElementById("myBtn");
				document.getElementById("myBtn").style.margin = "180px 20px";
				if (dots.style.display === "none") {
					dots.style.display = "inline";
					moreText.style.display = "none";
				} else {
					dots.style.display = "none";
					moreText.style.display = "inline";
				}
			}
		</script>
	</head>
	<body background="images/pexels-cátia-matos-1072179.jpg" width="auto" height="auto">
		<div id="bg">
				<!-- <img src="images/pexels-cátia-matos-1072179.jpg" width="auto" height="auto" /> -->
			<div id="plate" class="card">
				<img id="sampul" src="images/sampul.png" width="792" height="200">
				<div id="bio">
					<div id="nama">
						<p>Sasmita Eko</p>
						<p1>Mahasiswa di Universitas Brawijaya<br>Malang, Jawa Timur, Indonesia</p1>
					</div>
					<div id=desc>
						<p2><b>Tentang</b></p2>
						<p3>Saya 21 tahun dan saya cukup berpengalaman di bidang Multimedia. Hobi saya memang menggeluti dunia Multimedia, namun pendidikan yang sedang saya tempuh saat ini adalah Teknik Komputer, dimana saya sudah menjalani 5 semester dan sedang menjalani Praktek Kerja Lapangan. Saya juga berkenan mengisi lowongan yang sekiranya membutuhkan kemampuan seperti yang saya miliki saat ini atau yang akan saya pelajari sambil saya kerjakan nanti. <span id="dots">...</span><span id="more"><br><br>	I am 21 years old and I am capable enough in Multimedia. My hobby is dealing with such as Multimedia things, but my education now is about Computer Engineering, I have passed 5th semester and I am working on Job Training /Internship. I am also pleased to fill vacancies if it need the skills that I currently have or which I will learn while working on later.</span></p3>
						<button onclick="myFunction()" id="myBtn">Baca Selengkapnya</button>
					</div>
					<div id="task"><b><i>Tugas Pemrograman Web</i></b></div>
				</div>
				<img id="pp" src="images/pp.jpg" width="200" height="200">
			</div>
			<div id="fl" class="card">
				<form action="" method="get" id="login">
					Name: <input type="text" name="name"><br>
					E-mail: <input type="text" name="email"><br>
					<input type="submit"><br>
				<?php if(isset($_GET['name']) && isset($_GET['email'])):
						echo "<br>Hello World!<br><br>";
						echo "<br>Welcome ";
						echo $_GET["name"];
						echo "<br>Your email address is: ";
						echo $_GET['email'];
						if(isset($_GET['name']) && isset($_GET['email'])){
						    unset($_GET['name']);
						    unset($_GET['email']);
						}
				endif; ?></form>
				
				<div id="fl5">
					<a href="https://www.linkedin.com/in/sasmita-eko-4658741b7/" target="_blank">Click here!</a>
					<p5>Silahkan cek sumber halaman ini.</p5>
					
				</div>
			</div>
			<p4><b>Login</b></p4>
		</div>
		<p6>&copy; Sasmita Eko&trade;</p6>
	</body>
	<footer>
		<p>KALKULATOR</p>
		<?php if(isset($_GET['angka1']) && isset($_GET['angka2']) && isset($_GET['operator'])):
			$angka1 = $_GET['angka1'];
			$angka2 = $_GET['angka2'];
			$operator = $_GET['operator'];
			$hasil = '';
			if (is_numeric($angka1) && is_numeric($angka2)) {
			    switch ($operator) {
			        case "Tambah":
			           $hasil = $angka1 + $angka2;
			            break;
			        case "Kurang":
			           $hasil = $angka1 - $angka2;
			            break;
			        case "Kali":
			            $hasil = $angka1 * $angka2;
			            break;
			        case "Bagi":
			            $hasil = $angka1 / $angka2;
			    }
			}
			if(isset($_GET['angka1']) && isset($_GET['angka2'])){
				unset($_GET['angka1']);
				unset($_GET['angka2']);
			}
		endif; ?>
		<form action="" method="get" id="quiz-form">
                First Number<br>
                <input type="number" name="angka1" id="angka1" required="required" value="<?php echo $angka1; ?>" />
                <br>Second Number<br>
                <input type="number" name="angka2" id="angka2" required="required" value="<?php echo $angka2; ?>" />
                <br>Result<br>
                <input readonly="readonly" name="hasil" value="<?php if(isset($_GET['hasil'])): echo $hasil; endif; ?>"><br>
            <input type="submit" name="operator" value="Tambah" />
            <input type="submit" name="operator" value="Kurang" />
            <input type="submit" name="operator" value="Kali" />
            <input type="submit" name="operator" value="Bagi" />
	  	</form>
	</footer>
</html>