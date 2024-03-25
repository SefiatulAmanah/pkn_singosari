<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_golongan a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_golongan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Golongan</h3>

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
								<b>Golongan</b>
							</td>
							<td>:
								<?php echo $data_cek['golongan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis KP</b>
							</td>
							<td>:
								<?php echo $data_cek['jenis_kp']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>TMT KP</b>
							</td>
							<td>:
								<?php echo $data_cek['tmt_kp']; ?>
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
							<td>
								<?php echo $data_cek['tanggal_sk']; ?>
							</td>
						</tr>
						<tr>
							
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-golongan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-golongan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
					</div>					
			</div>
		</div>
	</div>

</div>