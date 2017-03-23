
		<div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>

	<script type="text/javascript" src=" <?php echo base_url();?>asset/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src=" <?php echo base_url();?>asset/lib/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src=" <?php echo base_url();?>asset/lib/metisMenu/jquery.metisMenu.js"></script>
	<script type="text/javascript" src=" <?php echo base_url();?>asset/lib/slimscroll/jquery.slimscroll.min.js"></script>
	    <!-- Custom and plugin javascript -->
		<script type="text/javascript" src=" <?php echo base_url();?>asset/js/inspinia.js"></script>
		<script type="text/javascript" src=" <?php echo base_url();?>asset/lib/pace/pace.min.js"></script>	
	<script type="text/javascript" src=" <?php echo base_url();?>asset/lib/toastr/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Aplikasi Pelaporan Tempat Sampah Ilegal Dinas Kebersihan Kota Bogor', 'Welcome to APTSI');

            }, 1300);
        });
    </script>
</body>
</html>
