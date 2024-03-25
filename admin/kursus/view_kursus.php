<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_kursus a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_kursus='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Kursus</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
					<tr>
							<td style="width: 150px">
								<b>NIK</b>
							</td>
							<td>:
								<?php echo $data_cek['nik']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['nama']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kursus</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kursus']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Kursus</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_kursus']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jumlah Jam</b>
							</td>
							<td>:
								<?php echo $data_cek['jumlah_jam']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Mulai</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_kursus']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Selesai</b>
							</td>
							<td>:
								<?php echo $data_cek['tgl_selesai_kursus']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor Sertifikat</b>
							</td>
							<td>:
								<?php echo $data_cek['no_sertif']; ?>
							</td>
						</tr>
						<tr>
						<tr>

							<td style="width: 150px">
								<b>Penyelenggara</b>
							</td>
							<td>
								<?php echo $data_cek['instansi']; ?>
							</td>
						</tr>						
					</tbody>
				</table>
				<div class="card-footer">

					<a href="?page=data-kursus&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-kursus&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" target="blank"class="btn btn-primary">Print</a> 
				</div>
				</div>
		</div>
		</div>
		<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						File SK
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					
					<img src="course/<?php echo $data_cek['course']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
			</div>

	