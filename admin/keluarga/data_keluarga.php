<div class="card card-info">
	<div class="card-header"style="background-color : #455A64;">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Riwayat Keluarga</h3>
	</div>
	<br>
				<center><h5><?php echo $_GET['nama']; ?></h5></center>
				<center><h5><?php echo $_GET['nik']; ?></h5></center>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive" id="printableTable">
			<div>
				
				<a href="?page=add-keluarga&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" class="btn btn-primary">
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
						<th>Hubungan keluarga</th>
						<th>Nama Keluarga</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Pekerjaan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  //perlu di perhatikan
			  $sql = $koneksi->query("SELECT * from riwayat_keluarga a 
			  INNER JOIN data_pegawai b ON a.nik=b.nik WHERE a.nik='".$_GET['nik']."'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						
						<td>
							<?php echo $data['hubungan_keluarga']; ?>
						</td>
						<td>
							<?php echo $data['nama_keluarga']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_lahir_keluarga'];?>
					</td>

						<td>
							<?php echo $data['jenis_kelamin_keluarga']; ?>
						</td>
                        <td>
							<?php echo $data['status_pekerjaan']; ?>
						</td>
						

						<td style="display:flex;flex-direction:column">
						<!-- button 1 -->
							<div>
								<a href="?page=view-keluarga&kode=<?php echo $data['id_keluarga']; ?>" title="Detail"
								class="btn btn-info btn-sm">
								<i class="fa fa-eye"></i>
							</a>
						</a>
						<a href="?page=edit-keluarga&kode=<?php echo $data['id_keluarga']; ?>&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" title="Ubah" class="btn btn-success btn-sm">
							<i class="fa fa-edit"></i>
						</a>
						<?php if($_SESSION["ses_level"] == 'Administrator') { ?>

						<a href="?page=del-keluarga&kode=<?php echo $data['id_keluarga']; ?>&nik=<?php echo $_GET['nik']; ?>&nama=<?php echo $_GET['nama']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
						title="Hapus" class="btn btn-danger btn-sm">
						<i class="fa fa-trash"></i>
						  </a>	
						  <?php } ?>
			
						</div>

						<!-- button 2 -->
						
						<?php if($_SESSION["ses_level"] == 'Administrator') { ?>
						<div style="margin-top:16px;"> 
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