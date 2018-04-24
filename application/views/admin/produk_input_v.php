
    <div id="produk">
                <!-- Form bordered -->
        <br>
        <form class="form-horizontal form-bordered" role="form">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-menu"></i> Form produk</h6></div>
                <div class="panel-body">

                    

                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Nama:</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" placeholder="nama produk" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Bahan:</label>
                        <div class="col-sm-10">
                            <input type="text" name="bahan" class="form-control" placeholder="bahan dasar produk lokal" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Harga:</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" placeholder="Harga produk" name="harga" class="form-control" required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Kontak:</label>
                        <div class="col-sm-10">
                            <input type="text" name="kontak" class="form-control" placeholder="kontak yang dapat dihubungi" required="true">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Deskripsi:</label>
                        <div class="col-sm-10">
                            <textarea rows="5" cols="5" name="deskripsi" class="form-control" placeholder="Deskripsi dari produk" required="true"></textarea>
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
            
            $("#produk form").on('submit',function(e){
                
                e.preventDefault();

                $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/a_produk_input_c/input_produk/')?>",
                data: $('form.form-horizontal').serialize(),
                //mimeType: "multipart/form-data",
                    success: function(response){
                        swal("Berhasil!", "Data berhasil di update", "success");
                        window.location.replace("<?php echo base_url('index.php/a_produk_table_c/')?>");
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