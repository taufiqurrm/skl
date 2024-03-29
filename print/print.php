<?php
session_start();
if (isset($_SESSION['logged']) && !empty($_SESSION['logged'])) {
include "../database.php";
//qrcode
	include "../phpqrcode/qrlib.php";    // Ini adalah letak pemyimpanan plugin qrcode

	$tempdir = "../qrcode-img/";        // Nama folder untuk pemyimpanan file img qrcode

	if (!file_exists($tempdir))        //jika folder belum ada, maka buat
	mkdir($tempdir);
//qrcode end

if (isset($_POST['submit'])){
	// $no_ujian = $_POST['nomor'];
 
	echo '<script type ="text/JavaScript">';  
	echo 'alert("Catatan: untuk cetak tekan klik kanan pada halaman ini kemudian pilih cetak/print, atur ukuran kerta ke Folio/F4")';  
	echo '</script>';  

?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
			<meta name=Generator content="Microsoft Word 15 (filtered)">
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="shortcut icon" href="../img/<?= $hsl['logo'] ?>">
			<title>Cetak SKL <?= $hsl['sekolah'] ?></title>
		<style>
		.cap {
		visibility: visible;
		background-image: url(../img/cap.png) !important;
		background-position: 75%;
		background-repeat: no-repeat;
		background-size: 22%;
		-webkit-print-color-adjust: exact;
		}

		@font-face
			{font-family:"Cambria Math";
			panose-1:2 4 5 3 5 4 6 3 2 4;}
		/* Style Definitions */
		p.MsoNormal, li.MsoNormal, div.MsoNormal
			{margin:0in;
			font-size:10.0pt;
			font-family:"Times New Roman",serif;}
		@page WordSection1
			{size:595.3pt 841.9pt;
			margin:.5in 1.0in 1.0in 1.0in;}
		div.WordSection1
			{page:WordSection1;}
		/* List Definitions */
		ol
			{margin-bottom:0in;}
		ul
			{margin-bottom:0in;}
		-->
		</style>
		</head>
		<body>
		
		<?php
		
			$qsiswa = mysqli_query($db_conn, "SELECT * FROM un_siswa");
			$no = 1; //variabel no
				if (mysqli_num_rows($qsiswa) > 0) {
				while ($data = mysqli_fetch_array($qsiswa)) {

				// $hasil = mysqli_query($db_conn, "SELECT * FROM un_siswa WHERE no_ujian='$no_ujian'");
				// if (mysqli_num_rows($hasil) > 0) {
				// $data = mysqli_fetch_array($qsiswa);
					$no_ujian = htmlspecialchars($data['no_ujian']);
					$nama = htmlspecialchars($data['nama']);
					$ttl = htmlspecialchars($data['ttl']);
					$ortu = htmlspecialchars($data['ortu']);
					$nis = htmlspecialchars($data['nis']);
					$nisn = htmlspecialchars($data['nisn']);
					$n_pai = htmlspecialchars($data['n_pai']);
					$n_pkn = htmlspecialchars($data['n_pkn']);
					$n_bin = htmlspecialchars($data['n_bin']);
					$n_mat = htmlspecialchars($data['n_mat']);
					$n_ipa = htmlspecialchars($data['n_ipa']);
					$n_ips = htmlspecialchars($data['n_ips']);
					$n_big = htmlspecialchars($data['n_big']);
					$n_sb = htmlspecialchars($data['n_sb']);
					$n_pjok = htmlspecialchars($data['n_pjok']);
					$n_pkr = htmlspecialchars($data['n_pkr']);
					$n_bde = htmlspecialchars($data['n_bde']);
					$n_mulok2 = htmlspecialchars($data['n_mulok2']);
					$rata2 = htmlspecialchars($data['rata2']);
					$status = htmlspecialchars($data['status']);
		?>
			<center>
		<table>
			<table cellpadding="1" width="720px" border="0">
				<tr>
				<td>
				<div class=WordSection1>
				<center><img width=693 height=117 src="../img/<?= $hsl["kop"] ?>"></center>

				<center>
					<b>SURAT KETERANGAN KELULUSAN</b> <br>
					Nomor : <?=$no_surat;?> <br>
				</center>
				<p>
					Kepala <?= $hsl['sekolah'] ?> selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran <?=$tahun_ajaran;?> berdasarkan:
				</p>
					<ol>
						<li>Peraturan Sekretaris Jendral Kementrian Pendidikan, Kebudayaan, Riset, dan Teknologi Nomor: 1 Tahun 2022 tentang Spesifikasi Teknis dan Bentuk, Serta Tata Cara Pengisian, Penggantian, dan Pemusnahan Blanko Ijazah Pendidikan Dasar dan Pendidikan Menengah Tahun Pelajaran 2021/2022;</li>
						<li>Kriteria Kelulusan dari Satuan Pedidikan sesuai dengan peraturan perundang-undangan;</li>
						<li>Rapat Pleno Dewan Pendidik tentang Kelulusan Peserta Didik <?= $hsl['sekolah'] ?> Tahun Pelajaran <?=$tahun_ajaran;?> pada tanggal 2 Juni 2021.
						</li>
					</ol>
				<br>
				Menerangkan bahwa:

					<table cellspacing="0" cellpadding="1" border="0">
						<tr>
							<td>Nama </td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<td> <?=$nama;?> </td>
						</tr>
						<tr>
							<td>Tempat dan Tanggal Lahir</td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<td><?=$ttl;?> </td>
						</tr>
						<tr>
							<td>Nama Orang Tua/Wali</td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<td><?=$ortu;?></td>
						</tr>
						<tr>
							<td>Nomor Ujian Sekolah</td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<td><?=$no_ujian;?> </td>
						</tr>
						<tr>
							<td>Nomor Induk Siswa</td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<td><?=$nis;?> </td>
						</tr>
						<tr>
							<td>Nomor Induk Siswa Nasional</td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<td><?=$nisn;?> </td>
						</tr>
						<tr>
							<td>Dinyatakan</td>
							<td>&nbsp; :&nbsp;&nbsp;</td>
							<?php
								if ($status == "1"){
									$status = "L U L U S";
								}else{
									$status = "<font color='#FF0000'> Kelulusan TERTUNDA </font>";
								}
							?>
							<td style='font-weight: bold;'><?=$status;?> </td>
						</tr>
					</table>
				Dengan nilai sebagai berikut:
				<br><br>
				<center>
				<table border="1" cellpadding="2" cellspacing="0">
					
						<thead align="center" bgcolor="#DEEAF6">
							<td width="47" height="30">
								<strong>No.</strong>
							</td>
							<td width="454">
								<strong>Mata Pelajaran (Kurikulum 2013)</strong>
							</td>
							<td width="123">
								<strong>Nilai Akhir</strong>
							</td>
						</thead>
					<tbody>
						<tr>
							<td colspan="3">
								<strong>&nbsp;&nbsp;Kelompok A</strong>
							</td>
						</tr>	
						<tr>
							<td align="center"> 1.</td>
							<td> Pendidikan Agama dan Budi Pekerti </td>
							<td align="center"><?=$n_pai;?></td>
						</tr>
						<tr>
							<td align="center"> 2.</td>
							<td> Pendidikan Pancasila dan Kewarganegaraan </td>
							<td align="center"><?=$n_pkn;?></td>
						</tr>
						<tr>
							<td align="center"> 3.</td>
							<td> Bahasa Indonesia </td>
							<td align="center"><?=$n_bin;?></td>
						</tr>	
						<tr>
							<td align="center"> 4.</td>
							<td> Matematika </td>
							<td align="center"><?=$n_mat;?></td>
						</tr>
						<tr>
							<td align="center"> 5.</td>
							<td> Ilmu Pengetahuan Alam </td>
							<td align="center"><?=$n_ipa;?></td>
						</tr>
						<tr>
						<tr>
							<td align="center"> 6.</td>
							<td> Ilmu Pengetahuan Sosial </td>
							<td align="center"><?=$n_ips;?></td>
						</tr>
						<tr>
						<tr>
							<td align="center"> 7.</td>
							<td> Bahasa Inggris </td>
							<td align="center"><?=$n_bin;?></td>
						</tr>
						<tr>
							<td colspan="3">
								<strong>&nbsp;&nbsp;Kelompok B</strong>
							</td>
						</tr>
						<tr>
							<td align="center"> 1.</td>
							<td> Seni Budaya </td>
							<td align="center"><?=$n_sb;?></td>
						</tr>		
						<tr>
							<td align="center"> 2.</td>
							<td> Pendidikan Jasmani, Olahraga, dan Kesehatan </td>
							<td align="center"><?=$n_pjok;?></td>
						</tr>	
						<tr>
							<td align="center"> 3.</td>
							<td> Prakarya </td>
							<td align="center"><?=$n_pkr;?></td>
						</tr>	
						<tr>
							<td rowspan="4" align="center" valign="top"> 4.</td>
							<td colspan="2"> Muatan Lokal </td>
						</tr>
						<tr>
							<td> a. Bahasa Indramayu </td>
							<td align="center"><?=$n_bde;?></td>
						</tr>
						<tr>
							<td> b. - </td>
							<td align="center"><?=$n_mulok2;?></td>
						</tr>
						<tr>
							<td> c. - </td>
							<td align="center">-</td>
						</tr>
						<tr>
							<td colspan="2" align="center" bgcolor="#DEEAF6">
								<strong>Rata-rata</strong>
							</td>
							<td align="center"><?=$rata2;?></td>
						</tr>
					</tbody>
				</table>
				</center>
					<?php 
						// berikut adalah parameter qr code
						$teks_qrcode    ="SKL: ".$no_surat.", ".$nama.", ".$no_ujian.", ".$nis.", ".$nisn.", ".$status;
						$namafile       ="qrc-".$no_ujian.".png";
						$quality        ="H"; // ini ada 4 pilihan yaitu L (Low), M(Medium), Q(Good), H(High)
						$ukuran         =7; // 1 adalah yang terkecil, 10 paling besar
						$padding        =1;
						QRCode::png($teks_qrcode, $tempdir.$namafile, $quality, $ukuran, $padding);
						// qrcode berakhir
					?>
				
					<table class="cap">
						<tr>
							<td width="65%" >
								<img style="margin-left:0.4in; width: 110px; height: 110px" src="../qrcode-img/<?= $namafile;?>" >
							</td>
							<td width="25%" valign="top">
									Indramayu, <?= $tgl_skl; ?> <br> Kepala Sekolah,
									<img style="width: 129px; height: 67px" src="../img/<?= $hsl['ttd'] ?>" >
									<br>
									
									<u>
									<b><?=$kepsek;?></b>
									</u>
									<br>
									NIP. <?=$nip;?>
							</td>
						</tr>
					</table>
					</div>
					</div>
					</td>
					</tr>
				</table>
			</table>
			</center>
			<?php
		}
			} ?>
		</body>
		</html>
<?php
	}else{
		header('Location: ../admin/data.php');
	}

	} else {
		header('Location: ./login.php');
	}
?>
