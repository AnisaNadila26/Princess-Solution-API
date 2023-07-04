<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="/" id="dashboard">
			<img class="img-profile rounded-circle" src="assets/images/logop.png" width=50px;></i>
			Princess Solution
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="/" class="nav-link smoothScroll">Dashboard</a>
				</li>
				<li class="nav-item">
					<a href="/" class="nav-link smoothScroll">Paket Kursus</a>
				</li>
				<li class="nav-item">
					<a href="/daftar" class="nav-link">Daftar</a>
				</li>
				<li class="nav-item">
					<a href="/login" class="nav-link contact">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>




<!-- <img src="assets/images/logo.png" style="width: 230px; float: right;" id="logo"> -->
<h5>Pendaftaran Kursus Mengemudi Mobil</h5>
<p class="text-center"><var>Anda sudah menentukan pilihan kendaraan atau paket yang diinginkan</var> </p>
<center>
	<div class="daftar">
		<div class="jenis_kendaraan mb-2 ">
			<div class="btn btn-warning">
				<button onclick=" klikjenis(this)" style="border: none; background-color: Transparent; color: white;" id="btnManual" value="Manual">
					<label for="manual">Manual</label>
			</div>
			<div class="btn btn-warning">
				<button onclick="klikjenis(this)" style="border: none; background-color: Transparent; color: white;" id="btnMatic" value="Matic">
					<label for="matic">Matic</label>
			</div>
		</div>

		<div id="pkManual" style="display:none">
			<div id="nab" class="card">
				<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="NAB">
					<img src="assets/images/NAB.png" class="card-img-top">
			</div>
			<div id="nas" class="card">
				<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="NAS">
					<img src="assets/images/NAS.png" class="card-img-top">
			</div>
			<div id="avnew" class="card">
				<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="AVNEW">
					<img src="assets/images/AVNEW.png" class="card-img-top">
			</div>
		</div>

		<div id="pkMatic" style="display:none">
			<div id="gmb" class="card">
				<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="GMB">
					<img src="assets/images/GMB.png" class="card-img-top">
			</div>
			<div id="gmm" class="card">
				<button onclick="klikmobil(this)" style="border: none; background-color: Transparent;" value="GMM">
					<img src="assets/images/GMM.png" class="card-img-top">
			</div>
		</div>

		<div id="detailsnab" style="display:none">
			<input type="hidden" name="instruktur" value="Hendri">
			<img src="assets/images/NAB.png" class="card-img-top">
			<table border=0>
				<tr>
					<td colspan="2">NEW AVANZA BIRU</td>
				</tr>
				<tr>
					<td><img src="assets/images/hendri.png" style="width:220px;"></td>
					<td>Instruktur : Agus Hendri</td>
				</tr>
				<tr>
					<td colspan="2">
						<button onclick="klikins(this)" class="btnJadwal btn-warning" style="--clr:#c5c9d3" value="Hendri"><a href="/jadwal/Hendri">Lihat Jadwal Tersedia</a></button>
					</td>
				</tr>
			</table>
		</div>
		<div id="detailsnas" style="display:none">
			<img src="assets/images/NAS.png" class="card-img-top">
			<table border=0>
				<tr>
					<td colspan="2">NEW AVANZA SILVER</td>
				</tr>
				<tr>
					<td><img src="assets/images/suhadi.png" style="width:220px;"></td>
					<td>Instruktur : Suhadi</td>
				</tr>
				<tr>
					<td colspan="2">
						<button onclick="klikins(this)" class="btnJadwal btn-warning" style="--clr:#c5c9d3" value="Suhadi"><a href="/jadwal/Suhadi">Lihat Jadwal Tersedia</a></button></td>
				</tr>
			</table>
		</div>
		<div id="detailsavnew" style="display:none">
			<img src="assets/images/AVNEW.png" class="card-img-top">
			<table border=0>
				<tr>
					<td colspan="2">ALL NEW AVANZA</td>
				</tr>
				<tr>
					<td><img src="assets/images/yono.png" style="width:220px;"></td>
					<td>Instruktur : Sumaryono</td>
				</tr>
				<tr>
					<td colspan="2">
						<button onclick="klikins(this)" class="btnJadwal btn-warning" style="--clr:#c5c9d3" value="Yono"><a href="/jadwal/Yono">Lihat Jadwal Tersedia</a></button></td>
				</tr>
			</table>
		</div>
		<div id="detailsgmb" style="display:none">
			<img src="assets/images/GMB.png" class="card-img-top">
			<table border=0>
				<tr>
					<td colspan="6">GRAND MATIC BIRU</td>
				</tr>
				<tr>
					<td><img src="assets/images/suhadi.png" style="width:180px;"></td>
					<td data-nama='instruktur'>Instruktur : Suhadi</td>
					<td></td>
					<td>atau</td>
					<td><img src="assets/images/yono.png" style="width:180px;"></td>
					<td data-nama='instruktur'>Instruktur : Sumaryono</td>
				</tr>
				<tr>
					<td colspan="2"><button onclick="klikins(this)" class="btnJadwal btn-warning" style="--clr:#c5c9d3" value="Suhadi"><a href="/jadwal/Suhadi">Lihat Jadwal Tersedia</a></button></td>
					<td></td>
					<td></td>
					<td colspan="2"><button onclick="klikins(this)" class="btnJadwal btn-warning" style="--clr:#c5c9d3" value="Yono"><a href="/jadwal/Yono">Lihat Jadwal Tersedia</a></button></td>
				</tr>
			</table>
		</div>
		<div id="detailsgmm" style="display:none">
			<img src="assets/images/GMM.png" class="card-img-top">
			<table border=0>
				<tr>
					<td colspan="2">GRAND MATIC MERAH</td>
				</tr>
				<tr>
					<td><img src="assets/images/eko.png" style="width:220px;"></td>
					<td data-nama='instruktur'>Instruktur : Eko Disyanto</td>
				</tr>
				<tr>
					<td colspan="2"><button onclick="klikins(this)" class="btnJadwal btn-warning" style="--clr:#c5c9d3" value="Eko"><a href="/jadwal/Eko">Lihat Jadwal Tersedia</a></button></td>
				</tr>
			</table>
		</div>
	</div>
</center>

<footer class="site-footer">
	<div class="container">
		<div class="row">

			<div class="col-lg-5 mx-lg-auto col-md-8 col-10">
				<h1 class="text-white" data-aos="fade-up" data-aos-delay="100" id="footer">Princess <strong>Solution</strong>.</h1>
			</div>

			<div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
				<h4 class="my-4">Contact Info</h4>

				<p class="mb-1">
					<a href="https://wa.me/6281279572555" target="_blank">
						<i class="fa fa-phone mr-2 footer-icon"></i>
						+62 812-7957-2555
					</a>
				</p>

				<p class="mb-1">
					<a href="https://instagram.com/birojasa_princess?igshid=YmMyMTA2M2Y=" target="_blank">
						<i class="fa fa-instagram mr-2 footer-icon"></i>
						@birojasa_princess
					</a>
				</p>

				<p class="mb-1">
					<a href="https://twitter.com/bjprincess_lpg" target="_blank">
						<i class="fa fa-twitter mr-2 footer-icon"></i>
						@bjprincess_lpg
					</a>
				</p>
			</div>

			<div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
				<h4 class="my-4">Alamat</h4>

				<p class="mb-1">
					<i class="fa fa-home mr-2 footer-icon"></i>
					<a href="https://www.google.com/maps/place/Biro+Jasa+Dan+Kursus+Mengemudi+Princess/@-5.4223805,105.2531808,17z/data=!4m12!1m6!3m5!1s0x2e40da4ed66816dd:0x8ff01b3b16a3e2d8!2sBiro+Jasa+Dan+Kursus+Mengemudi+Princess!8m2!3d-5.4223859!4d105.257408!3m4!1s0x2e40da4ed66816dd:0x8ff01b3b16a3e2d8!8m2!3d-5.4223859!4d105.257408" target="_blank">
						No.06, Jl.Jenderal Ahmad Yani, Gotong Royong, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119.
					</a>
				</p>
			</div>

			<div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
				<p class="copyright-text">Copyright &copy; 2022 DotaAprilLase
					<br>
				</p>
			</div>
		</div>
	</div>
</footer>




<script>
	// var lihatJadwal = document.querySelectorAll('#btnJadwal')
	// for (var satuan of lihatJadwal) {
	// 	satuan.addEventListener('click', () => {
	// 		alert(this.data('nama'))
	// 	})
	// }

	function klikjenis(obj) {
		localStorage.setItem("jenis_kendaraan", obj.value);
	}

	function klikmobil(obj) {
		localStorage.setItem("kode_kendaraan", obj.value);
	}

	function klikins(obj) {
		localStorage.setItem("instruktur", obj.value);
	}
</script>

<?php $this->endSection(); ?>