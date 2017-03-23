<?php $this->load->view('Layout/Header');?>
 
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
<h2>Management Berita</h2>
<ol class="breadcrumb">
<li>Home</li>
<li class="active">Management Berita</li>
</ol>
</div>
<div class="col-lg-2"> </div>
</div>
<br>
        <a href="<?php echo site_url();?>backoffice/posting" class="btn btn-primary"> Tambah Berita</a>
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>List News</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead style="background-color:RED;">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Writer</th>
        <th>Aksi</th>
    </tr>
    </thead>
   <!--  <tbody>
			<?php
			$no=1;
			foreach ($news as $berita) {
			?>

			<tr class="odd gradeX">
				<td><?php echo $no ?></td>
				<td><?php echo $berita->judul ?></td>
				<td><?php echo $berita->tgl ?></td>
				<td><?php echo $berita->username ?></td>
				<td><a href="<?php echo site_url();?>backoffice/editnews/<?php echo $berita->id_berita?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a> <a href="<?php echo site_url();?>backoffice/hapusberita/<?php echo $berita->id_berita?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
			</tr>
		<?php $no++;} ?>
		</tbody>
    --> </table>
    </div>

    </div>

    </div>

</div>
</div>


<?php $this->load->view('Layout/Footer');?>