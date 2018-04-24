<!-- Modal Ubah -->

		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
		                <h4 class="modal-title">Ubah Data</h4>
		            </div>

		            <form class="form-horizontal">
			            <div class="modal-body">
			            	<div class="responsive">

			                    <div class="form-group">
			                    <br>
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">ID</label>
				                        <div class="col-lg-10">
				                        	<input type="text" id="id" name="id">
				                        </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                    <!-- <br> -->
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Judul</label>
				                        <div class="col-lg-10">
				                        	<!-- <input type="hidden" id="id" name="id"> -->
				                            <input type="text" class="form-control" id="judul" name="judul" placeholder="nama">
				                        </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                    <!-- <br> -->
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Jenis</label>
				                        <div class="col-lg-10">
				                        	<!-- <input type="hidden" id="id" name="id"> -->
				                            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis edukasi">
				                        </div>
			                        </div>
			                    </div>

			                    <!-- <div>
			                     <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Status</label>
				                        <div class="col-lg-10">
				                            <input type="date" class="form-control" id="status" name="status">
				                        </div>
				                    </div>    
			                    </div
								--> 
      						
			                    <div class="form-group">
			                    	<div class="col-md-12">
				                        <label class="col-lg-2 col-sm-2 control-label">Deskripsi</label>
				                        <div class="col-lg-10">
				                        	<textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="deskripsi"></textarea>
				                        </div>
				                    </div>
			                    </div>			                    
			                </div>
			            </div>
			                <div class="modal-footer">
			                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
			                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
			                </div>
		                </form>
		                
		            </div>
		        </div>
		    </div>
		</div>
		<!-- END Modal Ubah -->

	<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#judul').attr("value",div.data('judul'));
            modal.find('#jenis').attr("value",div.data('jenis'));
            modal.find('#deskripsi').html(div.data('deskripsi'));            
        	});
    	});
	</script>

	<script type="text/javascript">
		$(function(){
			//refreshTable();

			// function refreshTable(){
			// 	$.ajax({
			// 		type: "get",
			// 		url: "<?php echo base_url('index.php/s_activity_c/todo')?>",
			// 		success: function(data){
			// 			debugger;
   //          			$('tbody#data').html(data);
			// 			//$("#data").html(html);
			// 		}
			// 	});
			// }
			
			$("#edit-data form").on('submit',function(e){
				
				e.preventDefault();

				$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/a_edukasi_table_c/update/')?>",
				data: $('form.form-horizontal').serialize(),
					success: function(response){
						swal("Updated!", "Data berhasil di update", "success");
						// alert("data berhasil diupdate");
						//$('#tabel').append(response);

						$('#edit-data').modal('hide');
						//refreshTable();
						//$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

						
					},
					error: function(){
						sweetAlert("Gagal!!!", "Data gagal diupdate", "error");
						// alert("Gagal");
					}	
				});
			});
		});
	</script>

	

	

