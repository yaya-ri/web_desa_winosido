

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-gambar" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Ubah Data</h4>
                    </div>


                        <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" action="<?php echo base_url('index.php/a_produk_picture_c/do_upload'); ?>" >
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">

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
                                        <div class="col-md-12">
                                          <label for="select" class="col-lg-2 control-label">Foto / Gambar</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" id="gambar" name="gambar">
                                                  <option>Foto 1</option>
                                                  <option>Foto 2</option>
                                                  <option>Foto 3</option>
                                                  <option>Foto 4</option>
                                                </select>
                                            </div>    
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="exampleInputFile" class="col-lg-2 control-label">File input</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control-file" id="userfile" name="userfile" aria-describedby="fileHelp">
                                            </div>
                                        </div>
                                    </div>


                                        <div class="form-actions text-right">
                                            <input type="submit" value="Submit form" class="btn btn-primary">
                                        </div>

                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
        <!-- END Modal Ubah -->

    <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-gambar').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#gambar').attr("value",div.data('gambar'));         
            });
        });
    </script>

   <!--  <script type="text/javascript">
        $(function(){
            //refreshTable();

            // function refreshTable(){
            //  $.ajax({
            //      type: "get",
            //      url: "<?php echo base_url('index.php/s_activity_c/todo')?>",
            //      success: function(data){
            //          debugger;
   //                   $('tbody#data').html(data);
            //          //$("#data").html(html);
            //      }
            //  });
            // }
            
            $("#edit-data form").on('submit',function(e){
                
                e.preventDefault();

                $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/a_kebudayaan_table_c/update/')?>",
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
    </script> -->

    

    

