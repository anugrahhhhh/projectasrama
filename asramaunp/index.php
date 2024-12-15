<?php
	require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
<div>
	<img src="http://web.unp.ac.id/sites/default/files/inline-images/logo%20UNP.png" width="100px" style="margin-left: -1110px; margin-top: -70px; margin-bottom: 20px;">
</div>

	<div id="imgindex">
		<div id="imglog">
			
			<p><br>Selamat Datang Asrama Kampus Universitas Negeri Padang Pesisir Selatan<br>

				<br>

		</div>

	</div>

			<div id="reservasi">
				<li>Reservasi</li>
				<form method="post" action="user/pemesanan" name="opsi">
					<table>
						<tr>
							<td>Check-In</td>
							<td>Check-Out</td>
							<td>Type</td>
							<td>Harga/Malam</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="date" name="cekin">
							</td>
							<td>
								<input type="date" name="cekout">
							</td>
							<td>
								<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
									<option selected="selected" disabled="disabled">-Pilih-</option>
									<option value="Rp 250.000">Kamar Lt.1</option>
									<option value="Rp 250.000">Kamar Lt.2</option>
									<option value="Rp 250.000">Kamar Lt.3</option>
								</select>
							</td>
							<td>
								<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
								<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
							</td>
							<td>
								<input type="submit" name="ok" value="Pesan" id="tombol">
							</td>
						</tr>
					</table>
				</form>
			</div>

			<div id="tentang">
				<h3>Tentang Kami</h3><br>
				<p>
				Asrama kampus UNP pesisir selatan adalah asrama yang terletak di kampung Sianik Sago, Painan,Kec. IV Jurai, Kabupaten Pesisir Selatan,Sumatera Barat, Lokasi nya cukup strategis. Lokasi yang sempurna dan akses mudah ke daerah wisata.
				</p><br>
				<p>
				Asrama tersebut berkisar 13 menit menuju pusat kota menggunakan kendaraan,serta lebih kurang 15 menit ke pusat objek wisata.
				</p>
			</div>
			
			<div id="petalokasi">
				<h3>Peta Lokasi</h3><br>
				<!--<img src="gambar/horison1.png" width="70%">-->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7816810384775!2d100.55111527461486!3d-1.3061236986814726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd34dd067401999%3A0x844b87527c765c5a!2sUniversitas%20Negeri%20Padang%20Kampus%20Pesisir%20Selatan!5e0!3m2!1sid!2sid!4v1684243100834!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div id="cekinout">
				<h3>INFORMASI</h3><br>
				<h4>Check-In</h4>
				<p>Jam Check-In Standar : 12.00 WIB</p>
				<p>*Waktu Check-In dari plan mempunyai prioritas lebih besar</p><br>
				<h4>Check-Out</h4>
				<p>Jam Check-Out Standar : 12.00 WIB</p>
				<p>*Waktu Check-Out dari plan mempunyai prioritas lebih besar</p><br>
			</div>
			</center>
<?php
	require_once "view/footer.php"
?>
