<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_mutasi_cpns_ke_pns a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_mutasi='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Mutasi</h3>

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
								<b>Tamat Cpns</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_cpns']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor Sk Cpns</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_sk_cpns']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Sk Cpns</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_sk_cpns']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor Bukan Pengangkatan Cpns</b>
							</td>
							<td>
								<?php echo $data_cek['nomor_bkn_pengangkatan_cpns']; ?>
							</td>
						</tr>
						
						
						<tr>
							<td style="width: 150px">
								<b>Tamat PNS</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_pns']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor Sk PNS</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_sk_pns']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Sk PNS</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_sk_pns']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nomor Diklat Pra Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_sttpl_diklat_pra_jabatan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Diklat Pra Jabatan</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_sttpl_diklat_pra_jabatan']; ?>
							</td>
						</tr>

						<tr>
							<td style="width: 150px">
								<b>Nomor Surat Keterangan Sehat</b>
							</td>
							<td>:
								<?php echo $data_cek['nomor_surat_keterangan_sehat']; ?>
							</td>
						</tr>
						
						<tr>
							<td style="width: 150px">
								<b>Tanggal Surat Keterangan Sehat</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_surat_keterangan_sehat']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Pengaadan Pegawai</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_pengadaan_pegawai']; ?>
							</td>
						</tr>
						<tr>
								
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-mutasi&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-mutasi&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
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
					
					<img src="mutasi/<?php echo $data_cek['mutasi']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
</div>