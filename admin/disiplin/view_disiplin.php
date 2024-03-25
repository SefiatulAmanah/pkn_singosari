<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from v_riwayat_hukuman_disiplin a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_hukuman='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">
	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Hukuman Disiplin</h3>
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
						</tr>
							<td style="width: 150px">
								<b>Tingkat Hukuman Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['tingkat_hukuman']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Hukuman Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_hukuman']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>No SK</b>
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
								<?php echo $data_cek['tanggal_sk_hukuman']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT Awal Hukuman</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_awal_hukuman_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Lama Hukuman (tahun)</b>
							</td>
							<td>:
								<?php echo $data_cek['lama_hukuman_tahun']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Lama Hukuman (bulan)</b>
							</td>
							<td>:
								<?php echo $data_cek['lama_hukuman_bulan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT Akhir Hukuman</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_akhir_hukuman_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Dasar Hukum Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['dasar_hukum_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alasan Hukum Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['alasan_hukum_disiplin']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Deskripsi Hukum Disiplin</b>
							</td>
							<td>:
								<?php echo $data_cek['deskripsi_hukuman_disiplin']; ?>
							</td>
						</tr>
						<tr>
							
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-disiplin&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-disiplin&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
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
					
					<img src="hd/<?php echo $data_cek['hd']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
</div>