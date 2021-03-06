<?php 
require 'functions.php';

$data = agenda("SELECT * FROM tb_agenda");

?>
<div class="card card-info ">
	<div class="card-header bg-warning">
		<h3 class="card-title">
			<i class="fa fa-table"></i>  Agenda Warga
        </h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped table-sm hover" style="font-size:14px;">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal Agenda</th>
						<th>Nama Agenda</th>
                        <th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
                <?php $no = 1; ?>
                <?php foreach($data as $agenda): ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $agenda["tgl_kegiatan"]; ?></td>
                        <td><?= $agenda["nama_kegiatan"]; ?></td>
                        <td><?= $agenda["keterangan"]; ?></td>
					</tr>
                <?php endforeach ; ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->