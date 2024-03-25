<div class="card card-info">
	<div class="card-header"style="background-color : #455A64;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Riwayat Pendidikan</h3>
	</div>
	<br>
	<center>
		<h5>
			<?php echo $_GET['nama']; ?>
		</h5>
			<?php echo $_GET['nik']; ?>
	</center>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive" id="printableTable">
			<div>
				<a href="?page=add-pendidikan&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
					<button class="btn btn-warning" onclick="window.print()">
					<i class="fa fa-edit"></i> Print
					</button>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>	
						<th>Tingkat Pendidikan</th>
						<th>Program Studi</th>
						<th>Lembaga Pendidikan</th>
						<th>No Ijazah</th>
						<th>Tanggal Ijazah</th>
						<th>Gelar</th>
						<th>Status Pengangkatan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  //perlu di perhatikan
			  $sql = $koneksi->query("SELECT * from riwayat_pendidikan a 
			  INNER JOIN data_pegawai b ON a.nik=b.nik WHERE a.nik='".$_GET['nik']."'");

              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						
						<td>
							<?php echo $data['tingkat_pendidikan']; ?>
						</td>

						<td>
							<?php echo $data['program_studi']; ?>
						</td>
						<td>
							<?php echo $data['nama_lembaga_pendidikan'];?>
					    </td>

						<td>
							<?php echo $data['nomor_ijazah']; ?>
						</td>
                        <td>
							<?php echo $data['tanggal_ijazah']; ?>
						</td>
						<td>
							<?php echo $data['gelar']; ?>
						</td>
						<td>
							<?php echo $data['ijazah_pengangkatan_cpns']; ?>
						</td>

						<td style="display:flex;flex-direction:column">
						<!-- button 1 -->
							<div>
								<a href="?page=view-pendidikan&kode=<?php echo $data['id_pendidikan']; ?>" title="Detail"
								class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
						</a>
						<?php if($_SESSION["ses_level"] == 'Administrator') { ?>
						<a href="?page=edit-pendidikan&kode=<?php echo $data['id_pendidikan']; ?>&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Ubah" class="btn btn-success btn-sm">
							<i class="fa fa-edit"></i>
						</a>
						<a href="?page=del-pendidikan&kode=<?php echo $data['id_pendidikan']; ?>&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
						title="Hapus" class="btn btn-danger btn-sm">
						<i class="fa fa-trash"></i>
						  </a>

						</div>

						<!-- button 2 -->
						
						<div style="margin-top:16px;">
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Riwayat Golongan
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<!-- <a class="dropdown-item" href="?page=data-golongan&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Golongan</a> -->
									<a class="dropdown-item" href="?page=data-jabatan&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Jabatan</a>
									<a class="dropdown-item" href="?page=data-diklat&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Diklat</a>
									<a class="dropdown-item" href="?page=data-tugas&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Tugas Tambahan</a>
									<a class="dropdown-item" href="?page=data-pendidikan&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Pendidikan</a>
									<a class="dropdown-item" href="?page=data-disiplin&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Hukuman Disiplin</a>
									<a class="dropdown-item" href="?page=data-mutasi&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Mutasi CPNS ke PNS</a>
									<a class="dropdown-item" href="?page=data-gaji&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Kenaikan Gaji Berkala</a>
									<a class="dropdown-item" href="?page=data-penilaian&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Penilaian Kinerja</a>
									<a class="dropdown-item" href="?page=data-penghargaan&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Penghargaan</a>
									<a class="dropdown-item" href="?page=data-pangkat&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Pangkat</a>
									<a class="dropdown-item" href="?page=data-kursus&nik=<?php echo $data['nik']; ?>&nama=<?php echo $data['nama_lengkap']; ?>">Riwayat Kursus</a>
								</div>
								</div>
							</div>
						<?php } ?>

						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->