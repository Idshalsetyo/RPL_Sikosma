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
					<li><a href="listing.php">List Kost</a></li>
					<li><a href="#02">Rekomendasi</a></li>
					<li><a href="#03">Lokasi Kost</a></li>
					<li><a href="#05">Tentang</a></li>
				</ul>
			</nav>
			<div class="submit ml-auto"><a href="#04">Review Kost</a></div>
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
					<li><a href="detail.php">Tentang</a></li>
					<li><a href="listing.php">List kost</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			 <div class="owl-carousel owl-theme home_slider">
			 	
			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index8.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>Pilihan Kos Terbaik</h1></div>
			 							<div class="home_price_tag">harga Kompetitif</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index8.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>Penyedia Kos</h1></div>
			 							<div class="home_price_tag">Sangat Tabah</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index8.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>Kemudahan Dalam Transaksi</h1></div>
			 							<div class="home_price_tag">pembayaran online</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 </div>

			 <!-- Home Slider Navigation -->
			 <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
			 
		</div>
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_container">
						<div class="search_title">Cari Kos Anda</div>
						<div class="search_form_container">
							<form action="search.php" method="get" class="search_form" id="search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<input type="text" name="src" class="search_input" placeholder="Cari disini saja ..." required="required">
									</div>
									<button class="search_button">cari sekarang</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Featured -->

	<div class="featured"id="02">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">kami berikan</div>
						<div class="section_title"><h1>Rekomendasi Kos</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">
			<?php 
				$query = $konek->query("SELECT akun.id_akun, akun.nama as x, akun.telp, kos.*, kategori.* FROM akun, kos, kategori WHERE akun.id_akun=kos.id_akun AND kos.id_kat=kategori.id_kat ORDER BY id_kos DESC LIMIT 0, 3");
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

	<!-- Map Section -->

	<div class="map_section container_reset"id="03">
		<div class="container">
			<div class="row row-xl-eq-height">

				<!-- Map -->
				<div class="col-xl-7 order-xl-1 order-2">
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content -->
				<div class="col-xl-5 order-xl-2 order-1">
					<div class="map_section_content">
						<div class="map_overlay">
							<svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
								<path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z" />
							</svg>
						</div>
						<div class="section_title_container">
							<div class="section_title"><h1>Pilih Lokasi</h1></div>
						</div>
						<div class="locations_list d-flex flex-column align-items-start justify-content-start">
							<label class="location_contaner" data-lat="-6.3211106" data-lng="107.2892555"> 
								<input type="radio" name="location_radio">
								<span></span>
								Galuh Mas
							</label>
							<label class="location_contaner" data-lat="-6.3302044" data-lng="107.3242302">
								<input type="radio" name="location_radio">
								<span></span>
								Warung Bambu
							</label>
							<label class="location_contaner" data-lat="-6.3162198" data-lng="107.3001931">
								<input type="radio" name="location_radio" checked>
								<span></span>
								Ardiasa Barat
							</label>
							<label class="location_contaner" data-lat="-6.3427271" data-lng="107.2524805">
								<input type="radio" name="location_radio">
								<span></span>
								TelukJambe Timur
							</label>
							<label class="location_contaner" data-lat="-6.3679467" data-lng="107.3738249">
								<input type="radio" name="location_radio">
								<span></span>
								Kosambi
							</label>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- Testimonials -->

	<div class="testimonials container_reset"id="04">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- Testimonials Image -->
				<div class="col-xl-6">
					<div class="testimonials_image">
						<div class="background_image" style="background-image:url(images/testimonials.jpg)"></div>
						<div class="testimonials_image_overlay"></div>
					</div>
				</div>

				<!-- Testimonials Content -->
				<div class="col-xl-6">
					<div class="testimonials_content">
						<div class="section_title_container">
							<div class="section_title"><h1>Testimoni Pelanggan</h1></div>
						</div>

						<!-- Testimonials Slider -->
						<div class="testimonials_slider_container">
							<div class="owl-carousel owl-theme test_slider">
								
								<!-- Slide -->
								<div class="test_slide">
									<div class="test_quote">"Sangat Membantu"</div>
									<div class="test_text">
										<p>Saya sebagai pelanggan, saya sangat puas dengan pengalaman menggunakan Sikosma sebagai aplikasi pencari kos. Aplikasi ini sangat membantu dan memudahkan saya dalam mencari kos-kosan secara online.</p>
									</div>
									<div class="test_author"><a href="#">Davva Alhitam</a>, Pelanggan Tabah</div>
								</div>

								<!-- Slide -->
								<div class="test_slide">
									<div class="test_quote">"Fitur nya lengkap"</div>
									<div class="test_text">
										<p>Sikosma juga sangat membantu dalam menghemat waktu karena semua informasi yang saya butuhkan tentang kos-kosan sudah tersedia di dalam aplikasi. Saya dapat melihat foto-foto kos-kosan, deskripsi lengkap, dan ulasan dari penyewa sebelumnya. Hal ini membantu saya untuk membuat keputusan yang tepat sebelum memutuskan untuk menyewa sebuah kos.</p>
									</div>
									<div class="test_author"><a href="#">Fabian Osuarta</a>, Pelanggan Ramah</div>
								</div>

								<!-- Slide -->
								<div class="test_slide">
									<div class="test_quote">"Tentang Kos"</div>
									<div class="test_text">
										<p>Sikosma adalah sebuah aplikasi pencari kos yang luar biasa. Saya sangat merekomendasikan aplikasi ini kepada siapa pun yang sedang mencari kos-kosan. Penggunaannya yang mudah, fitur-fitur yang lengkap, dan kemampuan untuk menemukan kos-kosan yang sesuai dengan kebutuhan dan budget membuat Sikosma menjadi pilihan terbaik bagi para pencari kos.Sikosma adalah sebuah aplikasi pencari kos yang luar biasa. Saya sangat merekomendasikan aplikasi ini kepada siapa pun yang sedang mencari kos-kosan. Penggunaannya yang mudah, fitur-fitur yang lengkap, dan kemampuan untuk menemukan kos-kosan yang sesuai dengan kebutuhan dan budget membuat Sikosma menjadi pilihan terbaik bagi para pencari kos.</p>
									</div>
									<div class="test_author"><a href="#">Fajrilah EL Legion</a>, Pelanggan Favorite</div>
								</div>

							</div>
						</div>
					</div>
				</div>

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