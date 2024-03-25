<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_keluarga a 
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE a.id_keluarga='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Keluarga</h3>

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
								<b>Nama Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['nama_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Hubungan Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['hubungan_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tempat Lahir Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['tempat_lahir_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal Lahir Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_lahir_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Kelamin Keluarga</b>
							</td>
							<td>
								<?php echo $data_cek['jenis_kelamin_keluarga']; ?>
							</td>
						</tr>
						
						
						<tr>
							<td style="width: 150px">
								<b>Agama Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['agama_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nik Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['nik_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Alamat Keluarga</b>
							</td>
							<td>:
								<?php echo $data_cek['alamat_keluarga']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Pernikahan</b>
							</td>
							<td>:
								<?php echo $data_cek['status_pernikahan']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Status Pekerjaan</b>
							</td>
							<td>:
								<?php echo $data_cek['status_pekerjaan']; ?>
							</td>
						</tr>
						<tr> 

						<tr>
							<td style="width: 150px">
								<b>Wajib Pajak</b>
							</td>
							<td>:
								<?php echo $data_cek['wajib_pajak']; ?>
							</td>
						</tr>
						<tr>

						<tr>
							<td style="width: 150px">
								<b>Status Hidup</b>
							</td>
							<td>:
								<?php echo $data_cek['status_hidup']; ?>
							</td>
						</tr>
						<tr>

						<tr>
							<td style="width: 150px">
								<b>Tunjangan Gaji</b>
							</td>
							<td>:
								<?php echo $data_cek['tunjangan_gaji']; ?>
							</td>
						</tr>
						<tr>
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-keluarga&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-keluarga&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
					</div>	
			
			</div>
		</div>
	</div>

</div>