<script type="text/javascript" src="../js/datatables/dataTables.tableTools.js"></script>
<script type="text/javascript">
$(function(){
	$('#example1').dataTable( {
		"dom": 'T<"clear">lfrtip',
		"tableTools": {
		"sSwfPath": "swf/copy_csv_xls_pdf.swf",
			"aButtons": [
					{
					"sExtends":"csv"
				},
					{
					"sExtends":"xls"
				},
					{
					"sExtends":"pdf"
				}
			]
}
} );
});
</script>
<table id="example1" class="table table-bordered table-striped table-responsive">
	<thead>
		<tr>
			<th>No</th>
			<th>judul</th>
			<th>kategori</th>
			<th>deskripsi</th>
			<th>tanggal input</th>
			<th>lokasi</th>
		
		</tr>
	</thead>
	<tbody>
		<?php echo $obj->get_all_data(); ?>
	</tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Data</h4>
            </div>
            <div class="modal-body">
                <div id="show_det">
				
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
