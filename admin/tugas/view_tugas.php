<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_tugas_tambahan a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_tugas='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Tugas Tambahan</h3>

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
								<?php echo $data_cek['nama_lengkap']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Unit Organisasi</b>
							</td>
							<td>:
								<?php echo $data_cek['unit_organisasi']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Tugas Tambahan</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_tugas_tambahan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT Awal Tugas Tambahan</b>
							</td>
							<td>
								<?php echo $data_cek['tmt_awal_tugas_tambahan']; ?>
							</td>
						</tr>
                        <tr>
							<td style="width: 150px">
								<b>TMT Akhir Tugas Tambahan</b>
							</td>
							<td>
								<?php echo $data_cek['tmt_akhir_tugas_tambahan']; ?>
							</td>
						</tr>
                        <tr>
							<td style="width: 150px">
								<b>Nomor SK</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_sk']; ?>
							</td>
						</tr>
                        <tr>
							<td style="width: 150px">
								<b>Tanggal SK</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_sk']; ?>
							</td>
						</tr>
						<tr>
							
						
					</tbody>
				</table>
				<div class="card-footer">

					<a href="?page=data-tugas&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-tugas&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
				</div>
			</div>
			</div>
			</div>
			<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Foto SK
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="tugas/<?php echo $data_cek['tugas']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
			</div>

	