<?php 
require './koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SiKosMa | Homepage</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="sikos telang - pusat kos daerah universitas trunojoyo madura">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/phone-call.svg" alt=""></div>
						<span>+62 8231146 3002</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/placeholder.svg" alt=""></div>
						<span>Jl. Unsika Raya, no 420 ,Kosambi-Karawang</span>
					</li>
					<!-- Email -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/envelope.svg" alt=""></div>
						<span>sikosma@gmail.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
					
					</ul>
				</div>
				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="login.php">Login</a></li>
						<li><a href="daftar.php">Daftar</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Si<span>KosMa</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li class="active"><a href="index.php">Home</a></li>

				</ul>
			</nav>
			<div class="submit ml-auto"><a href="#05">Tentang</a></div>
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<div class="log_reg d-flex flex-row align-items-center justify-content-end">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#">Login</a></li>
					<li><a href="#">Daftar</a></li>
				</ul>
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Tentang</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="blog.php">Berita</a></li>
					<li><a href="contact.php">Kontak</a></li>
				</ul>
			</nav>
		</div>
	</div>


	<!-- Featured -->

	<div class="featured" style="margin-top: 8%;margin-bottom: 5%;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">kami berikan</div>
						<div class="section_title"><h1>Listing Kos</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">
			<?php 
				$query = $konek->query("SELECT akun.id_akun, akun.nama as x, akun.telp, kos.*, kategori.* FROM akun, kos, kategori WHERE akun.id_akun=kos.id_akun AND kos.id_kat=kategori.id_kat ORDER BY id_kos DESC ");
				while($row=$query->fetch_object()){
			?>	
				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<?php
							$img = $konek->query("SELECT MIN(nama_gambar) as ng FROM gambar_kos WHERE id_kos='".$row->id_kos."'")->fetch_object();
							?>
							<div class="listing_image_container">
								<img src="./images/index9.jpeg" alt="" width="350" height="200">
							</div>
							<?php 
							 $harga = $konek->query("SELECT bulanan FROM harga WHERE id_kamar IN (SELECT MIN(id_kamar) FROM kamar WHERE id_kos='".$row->id_kos."')")->fetch_object();
							?>
							<div class="tag_price listing_price"><?= empty($harga->bulanan) ? '-'  : 'Rp. '.number_format($harga->bulanan).'/Bulan'; ?></div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<a href="#"><?= $row->alamat; ?></a>
							</div>
							<div class="listing_info">
								<div class="tag tag_rent"><a href="#" onclick="alert('Anda bisa menghubungi : <?= $row->telp; ?>'); return false;"><i class="fa fa-phone"></i> Hubungi Pemilik</a></div>
								<div class="tag tag_house"><a href="detail.php?id=<?= $row->id_kos; ?>">Detail</a></div>
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap"></ul>
							</div>
						</div>
					</div>
				</div>
			<?php 
				}
			?>
				
			</div>
		</div>
	</div>

	

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col"id="05">
						<div class="footer_about">
							<div class="footer_logo"><a href="#">Si<span>KosMa</span></a></div>
							<div class="footer_text">
								<p>Sikosma adalah sebuah aplikasi pencari kos yang memudahkan pengguna untuk mencari kos-kosan secara online. Pengguna dapat mencari kos berdasarkan lokasi, harga, fasilitas, dan tipe kamar yang diinginkan. Aplikasi ini juga dilengkapi dengan fitur chat untuk memudahkan komunikasi antara pemilik kos dan penyewa potensial. Dengan Sikosma, pengguna dapat dengan mudah menemukan kos-kosan yang sesuai dengan kebutuhan dan budget mereka.</p>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Informasi</div>
							<div class="footer_info">
								<ul>
									<!-- Phone -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/phone-call.svg" alt=""></div>
										<span>+62 82335685 138</span>
									</li>
									<!-- Address -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/placeholder.svg" alt=""></div>
										<span>Jl. Raya Telang, PO BOX 2 Kamal, Bangkalan-Madura</span>
									</li>
									<!-- Email -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/envelope.svg" alt=""></div>
										<span>sikostelang@gmail.com</span>
									</li>
								</ul>
							</div>
							
						</div>
					</div>

					<!-- Footer Column -->
					
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="copyright order-md-2 order-1 ml-md-auto">
								Copyright &copy; <script>document.write(new Date().getFullYear());</script> SiKosMa - All rights reserved 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>

<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBHvXXoJ7gQus_Rae9tcaonFV3RelxMOMs"></script>
<script src="js/custom.js"></script>
</body>
</html>