
<!-- First Row -->
<!-- <div id="kebudayaan">
   <div class="panel panel-default">
     <div class="panel-heading">
       <h3 class="panel-title">Input Kebudayaan</h3>
     </div>
     <div class="panel-body"> 
       <div class="form-group">
           <label class="col-sm-2 control-label">Nama Kebudayaan:</label>
           <div class="col-sm-10">
               <input type="text" name="nama" class="form-control" placeholder="tuliskan nama kebudayaan" required="true">
           </div>
       </div><br>

       <div class="form-group">
           <label class="col-sm-2 control-label">Pelaksanaan:</label>
           <div class="col-sm-10">
              <input type="text" name="pelaksanaan" class="form-control" placeholder="tuliskan pelaksanaan kebudayaan" required="true">
           </div>
       </div><br>
       
       <div class="form-group">
           <label class="col-sm-2 control-label">Deskripsi:</label>
           <div class="col-sm-10">
               <textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Deskripsi deskripsi kebudayaan" required="true"></textarea>
           </div>
       </div><br>

       <div class="form-group">
           <label class="col-sm-2 control-label">Gambar:</label>
           <div class="col-sm-10">
               <input type="file" name="gambar" class="form-control" required="true">
           </div>
       </div><br>


       <div class="form-actions text-right">
           <input type="submit" value="Submit form" class="btn btn-primary">
       </div>
     </div>
   </div> 
</div> -->

    <div id="kebudayaan">
                <!-- Form bordered -->
        <br>
        <form class="form-horizontal form-bordered" role="form">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i> Form Kebudayaan</h6></div>
                <div class="panel-body">

                    

                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Nama:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" placeholder="nama kebudayaan" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Jenis:</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis" class="form-control" placeholder="Jenis Kebudayaan" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pelaksanaan:</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" placeholder="Pelaksanaan kebudayaan" name="pelaksanaan" class="form-control" required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Deskripsi:</label>
                        <div class="col-sm-10">
                            <textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Deskripsi aktivitas yang dilakukan" required="true"></textarea>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label">Kendala/Masalah:</label>
                        <div class="col-sm-10">
                            <input type="file" name=gambar class="form-control" >
                        </div>
                    </div> -->


                    <div class="form-actions text-right">
                        <input type="submit" value="Submit form" class="btn btn-primary">
                    </div>

                </div>
            </div>
        </form>
        <!-- /form striped -->
    </div>
   
<!-- END Third Row -->

<script type="text/javascript">
        $(function(){
            //refreshTable();

            // function refreshTable(){
            //     $.ajax({
            //         type: "get",
            //         url: "<?php echo base_url('index.php/s_activity_form_c')?>",
            //         success: function(data){
            //             debugger;
            //             $('section#konten').html(data);
            //             //$("#data").html(html);
            //         }
            //     });
            // }
            
            $("#kebudayaan form").on('submit',function(e){
                
                e.preventDefault();

                $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/a_kebudayaan_input_c/input_kebudayaan/')?>",
                data: $('form.form-horizontal').serialize(),
                //mimeType: "multipart/form-data",
                    success: function(response){
                        swal("Berhasil!", "Data berhasil di update", "success");
                        window.location.replace("<?php echo base_url('index.php/a_kebudayaan_table_c/')?>");
                        //$('#tabel').append(response);

                        //$('#edit-data').modal('hide');
                        //refreshTable();
                        //$("#data-aktivitas").replaceWith($('#data-aktivitas', $(html)));

                        
                    },
                    error: function(){
                        swal("Gagal!", "ada kesalahan", "error");
                    }   
                });
            });
        });
    </script>