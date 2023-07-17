<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



<?php
			// definisi variabel
			$nameErr = $emailErr = $passErr = $nimErr = $kelasErr = "";
			$name = $email = $pass = $nim = $kelas = "";

			if ($_SERVER["REQUEST_METHOD"] == "GET") {
			  if (empty($_GET["name"])) {
			    $nameErr = "Name harus diisi";
			  } else {
			    $name = test_input($_GET["name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Hanya angka dan spasi yang valid"; 
			    }
			  }
			  
			  if (empty($_GET["email"])) {
			    $emailErr = "Email harus diisi";
			  } else {
			    $email = test_input($_GET["email"]);
			    // check if e-mail address is well-formed
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format"; 
			    }
			  }
			    
			  if (empty($_GET["nim"])) {
			    $nimErr = "NIM harus diisi";
			  }

			  if (empty($_GET["kelas"])) {
			    $kelasErr = "Kelas harus diisi";
			  } else {
			    $kelas = test_input($_GET["kelas"]);
			  }

			  if (empty($_GET["pass"])) {
			    $passErr = "Password harus diisi";}
			  // } if (($_POST["pass"])!="admin") {
			  // 	$passErr = "Password salah!"
			  // }
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>


</head>
<body>
	<!-- loader -->
	<header>
		<div class="navbar">
			<div id="container" class="container">
				<h1><a href="index.html">Tugas Akhir Pemprograman Web</a></h1>
				<ul>
					<li><a href="#container">HOME</a></li>
					<li><a href="#banner">BANNER</a></li>
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#program">PROGRAM</a></li>
				</ul>
			</div>
		</div>
	</header>

	<!-- banner -->
	<section class="banner" id="banner">
		<img class="foto" src="foto.jpg">
		<h2>WELCOME TO MY WEBSITE</h2>
	</section>

	<!-- about -->
	<section id="about" class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Perkenalkan, nama saya M. Milky Gazura dengan NIM 2200018396. Saya merupakan mahasiswa dari Program Studi Informatika dan saat ini berada di kelas I. Saya berasal dari Kota Banjarmasin, Provinsi Kalimantan Selatan. Saya mengakui bahwa saya memiliki sedikit pengalaman dalam pemrograman, karena saya baru mengenal dunia coding. Namun, saya memiliki minat yang besar dalam menjadi seorang programmer atau back end developer. Selain itu, saya juga menyukai kegiatan membaca. Cita-cita saya adalah menjadi seorang programmer atau back end developer yang handal. Saya membuat website ini sebagai bagian dari tugas akhir mata kuliah Pemrograman Web. Website ini berisi beberapa script dalam bahasa HTML, JavaScript, CSS, dan PHP. Tujuan saya dalam pembuatan website ini adalah untuk meningkatkan keterampilan saya dalam mengoding, terutama dalam pemrograman web. Saya berharap dengan membuat website ini, saya akan menjadi lebih terampil dalam dunia pemrograman web. Aamiin ya Rabb.</p>
		</div>
	</section>

	<!-- program -->
	<section id="program" class="program">
		<div class="container">
			<!-- Percabangan & Validasi Javascript-->
			
				Skrip Percabangan & Validasi
				<br><br><br><br>
		
				<form onSubmit="validasi()" method="POST" action="action.php">
				<div>
					<label>Nama Lengkap:</label>
					<input type="text" name="nama" id="nama" />
				</div>
				<div>
					<label>NIM:</label>
					<input type="number" name="nim" id="nim" />
				</div>
				<div>
					<label>Kelas:</label>
					<input type="text" name="kelas" id="kelas" />
				</div>
				<div>
					<label>Email:</label>
					<input type="email" name="email" id="email" />
				</div>
				<div>
					<label>Password:</label>
					<input type="password" name="pass" id="pass" />
				</div>
				<div>
					<label>Alamat:</label>
					<textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
				</div>
				<div>
					<input type="submit" value="Submit" class="tombol">
				</div>
			</form>
			<script type="text/javascript">
				function validasi() {
					var nama = document.getElementById("nama").value;
					var email = document.getElementById("email").value;
					var alamat = document.getElementById("alamat").value;
					if (nama != "" && email!="" && alamat !="" && nim!="" && kelas !="" && pass!="admin") {
						return true;
					}else{
						alert('Anda harus mengisi data dengan lengkap !');
					}
				}

				$(document).ready(function(){
  // Tambahkan smooth scroll pada setiap tautan yang memiliki hash
  $('a[href*="#"]').on('click', function(event) {
    // Pastikan tautan hanya merujuk ke elemen pada halaman yang sama
    if (this.hash !== "") {
      event.preventDefault();
      
      // Ambil hash dari tautan yang diklik
      var hash = this.hash;

      // Animasikan scroll halus ke elemen yang dituju
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Tambahkan hash ke URL setelah animasi scroll selesai
        window.location.hash = hash;
      });
    } // End if
  });
});

			</script>
		</div>
		<div class="program">
		<table align="center" border="0px" width="100%" height="100%" cellspacing="0px" cellpadding="15px">
			<tr>
				<td align="center">
					Skrip Perulangan </br>
					<form action="action1.php">
						<input type="submit" value="Lihat" class="tombol">
					</form>
				</td>
				<td align="center">
					<ul>
					<li><a href="#container">HOME</a></li>
					<li><a href="action1.php">action1.php</a></li>
				</ul>
				</td>
			</tr>
		</table>
		</div>
		<div class="container">
			<!-- Percabangan & Validasi PHP -->
			
				Skrip Percabangan & Validasi
				<br>
			
			<section>
    <div>
        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" id="nama" value="<?php echo $name; ?>" />
                <span class="error">* <?php echo $nameErr; ?></span>
            </div>
            <div>
                <label>NIM: </label>
                <input type="number" name="nim" id="nim" value="<?php echo $nim; ?>" />
                <span class="error">* <?php echo $nimErr; ?></span>
            </div>
            <div>
                <label>Kelas:</label>
                <input type="text" name="kelas" id="kelas" value="<?php echo $kelas; ?>" />
                <span class="error">* <?php echo $kelasErr; ?></span>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" />
                <span class="error">* <?php echo $emailErr; ?></span>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>" />
                <span class="error">* <?php echo $passErr; ?></span>
            </div>
            <div>
                <label>Alamat:</label>
                <textarea cols="40" rows="5" name="alamat" id="alamat"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit" class="tombol">
            </div>
        </form>
    </div>
</section>
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - M. MILKY GAZURA. All Rights Reserved.</small>
		</div>
	</footer>
</body>
</html>
 
