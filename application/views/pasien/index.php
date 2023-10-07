	<!-- Main Content -->
	<div class="main-content">
		<section class="section">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h3><i class="fas fa-home"></i></h3>
						</div>
						<div class="card-body">
							<center>
								<h2>Hai, Kak <?php echo $this->session->userdata("nama_pasien"); ?> <span id="pesan"></span></h2>
								<h5>Selamat Datang Kembali Di Klinik Abata Farma</h5>
							</center>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script>
		var Digital = new Date()
		var hours = Digital.getHours()

		var pesan = "";

		if (hours >= 5 && hours <= 11) //pesan pagi hari (05.00-13.00)
			pesan = "Selamat Pagi";
		else if (hours == 12) //pesan siang hari (12.00 - 13.00)
			pesan = "Selamat Siang";
		else if (hours >= 13 && hours <= 17) //pesan sore hari(15.00-17.00)
			pesan = "Selamat Sore";
		else if (hours >= 18 && hours <= 20) //pesan petang hari (17.oo-19.00)
			pesan = "Selamat Petang";
		else if (hours >= 21 && hours <= 11) //pesan malam hari (20.00-23.00)
			pesan = "Selamat Malam";

		document.getElementById('pesan').innerHTML = pesan;
	</script>