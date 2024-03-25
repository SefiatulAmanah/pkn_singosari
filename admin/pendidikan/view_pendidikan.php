<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from riwayat_pendidikan a
		INNER JOIN data_pegawai b ON a.nik=b.nik WHERE id_pendidikan='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Riwayat Pendidikan</h3>

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
							<b>Tingkat Pendidikan</b>
						</td>
						<td>:
							<?php echo $data_cek['tingkat_pendidikan']; ?>
						</td>
					    </tr>
					
                    <tr>
						<td style="width: 150px">
							<b>Program Studi</b>
						</td>
						<td>:
							<?php echo $data_cek['program_studi']; ?>
						</td>
					    </tr>

					<tr>
						<td style="width: 150px">
							<b>Nomor Ijazah</b>
						</td>
						<td>:
							<?php echo $data_cek['nomor_ijazah']; ?>
						</td>
						</tr>

                        <tr>
							<td style="width: 150px">
								<b>Tanggal Ijazah</b>
							</td>
							<td>:
								<?php echo $data_cek['tanggal_ijazah']; ?>
							</td>
						</tr>	

						
					<tr>
						<td style="width: 150px">
							<b>Lembaga Pendidikan</b>
						</td>
						<td>:
							<?php echo $data_cek['nama_lembaga_pendidikan']; ?>
							</td>
						</tr>
                        
                        <tr>
							<td style="width: 150px">
								<b>Gelar</b>
							</td>
							<td> :
								<?php echo $data_cek['gelar']; ?>
							</td>
						</tr>
						
						<tr>
							<td style="width: 150px">
								<b>Ijazah Pengangkatan CPNS</b>
							</td>
							<td> :
								<?php echo $data_cek['ijazah_pengangkatan_cpns']; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">

					<a href="?page=data-pendidikan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama_lengkap']; ?>" class="btn btn-warning">Kembali</a>
					<a href="?page=cetak-pendidikan&nik=<?php echo $data_cek['nik']; ?>&nama=<?php echo $data_cek['nama']; ?>&kode=<?php echo $_GET['kode'];?>" target="blank"class="btn btn-primary">Print</a> 
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
					
					<img src="ijazah/<?php echo $data_cek['ijazah']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['nik']; ?>
					<?php echo $data_cek['nama']; ?>
				</h3>
			</div>
		</div>
	</div>
			</div>
	