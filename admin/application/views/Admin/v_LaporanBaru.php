<?php $this->load->view('Layout/Header');?>

<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2> Laporan Baru</h2>
<ol class="breadcrumb">
<li>Home</li>
<li class="active">Laporan Baru</li>
</ol>
</div>
<div class="col-lg-2"> </div>
</div>
<br>
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>List Laporan Baru</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead style="background-color:RED;">
    <tr><th>No</th>
        <th>Nama</th>
        <th>Telpon</th>
        <th>Tanggal</th>
        <th>Deskripsi</th>
        <th>Lokasi</th>
		<th>Foto</th>
		<th>Aksi</th>
    </tr>
    </thead>
    <tbody>
			<?php
			$no=1;
			foreach ($laporanbaru as $new) {
			?>

			<tr class="odd gradeX">
				<td><?php echo $no ?></td>
				<td><?php echo $new->nama_pelapor ?></td>
				<td><?php echo $new->no_telp ?></td>
				<td><?php echo $new->tgl_laporan ?></td>
				<td><?php echo $new->deskripsi ?></td>
				<td><?php echo $new->lokasi ?></td>
				<td><?php echo $new->foto ?></td>
				<td><a href="<?php echo site_url();?>Admin/makelaporanproses/<?php echo $new->id_laporan ?>" class="btn btn-primary">Proses</a> 
			<a href="<?php echo site_url();?>Admin/hapuslaporan/<?php echo $new->id_laporan?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
		<?php $no=$no+1; } ?>
		</tbody>
	</table>
    </div>

    </div>

    </div>

</div>
</div>
			

<?php $this->load->view('Layout/Footer');?>
