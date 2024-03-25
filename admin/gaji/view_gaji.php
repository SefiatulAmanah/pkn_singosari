<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_kenaikan_gaji_berkala a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_gaji='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Kenaikan Gaji</h3>

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
								<b>TMT</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_kgb']; ?>
							</td>
						</tr>

						<tr>
							<td style="width: 150px">
								<b>Nomor Sk</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_sk']; ?>
							</td>
						</tr>
						
						<tr>
							<td style="width: 150px">
								<b>Tanggal Sk Kgb</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_sk_kgb']; ?>
							</td>
						</tr>

						<tr>
							<td style="width: 150px">
								<b>Jenis Kenaikan</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kenaikan']; ?>
							</td>
						</tr>

						<tr>
							<td style="width: 150px">
								<b>Golongan Ruang</b>
							</td>
							<td>:
								<?php echo $data_cek['golongan_ruang']; ?>
							</td>
						</tr>
				
						<tr>
							<td style="width: 150px">
								<b>Masa Kerja Tahun</b>
							</td>
							<td>:
								<?php echo $data_cek['masa_kerja_tahun']; ?>
							</td>
						</tr>
						
						<tr>
							<td style="width: 150px">
								<b>Masa Kerja Bulan</b>
							</td>
							<td>:
								<?php echo $data_cek['masa_kerja_bulan']; ?>
							</td>
						</tr>
						
						<tr>
							<td style="width: 150px">
								<b>Gaji</b>
							</td>
							<td>:
								<?php echo $data_cek['gaji']; ?>
							</td>
						</tr>
						
						<tr>
							<td style="width: 150px">
								<b>Spesimen Pejabat</b>
							</td>
							<td>:
								<?php echo $data_cek['spesimen_pejabat']; ?>
							</td>
						</tr>
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-gaji&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-gaji&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
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
					
					<img src="sp/<?php echo $data_cek['sp']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
