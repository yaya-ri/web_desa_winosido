<script type="text/javascript">

    function refreshTable(){
                $.ajax({
                    type: "get",
                    url: "<?php echo base_url('index.php/s_activity_c/done')?>",
                    success: function(data){
                        debugger;
                        $('tbody#data').html(data);
                        //$("#data").html(html);
                    }
                });
            }

    function hapus(id) {
        
    if (confirm("hapus?")) {
        $.ajax({
            url: "<?php echo base_url('index.php/a_edukasi_table_c/delete_edukasi/')?>",
            type: "POST",
            data: {id:id},
            success: function () {
                swal("Berhasil!", "Data berhasil di hapus", "success");
                location.reload();
                //refreshTable();
            },
            error: function () {
                swal("Error!", "ada kesalahan", "error");
            }
        });
    } else {
        swal("Gagal!", "gagal menghapus", "error");
    }
}
</script>


<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Daftar edukasi Wonosido</h3>
</div>
<div class="panel-body">
<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/a_edukasi_input_c">tambah</a>

<table class="table table-striped">
     <thead>
        <tr class="row-name">
           <th>No</th>
           <th>Judul</th>
           <th>Jenis</th>
           <th class="text-center">Settings</th>
        </tr>
     </thead>   
     <tbody>
     <?php $i=1; foreach ($edukasi as $a) {?>
        <tr class="row-content">
           <td><?php echo $i++; ?></td>
           <td><?php echo $a->edukasi_title; ?></td>
           <td><?php echo $a->edukasi_type; ?></td>
           <td class="text-center"> 
              <!-- <a class="btn btn-info" href="path/to/settings" aria-label="Settings">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a> -->
              <a
                href="javascript:;"
                data-id="<?php echo $a->edukasi_id; ?>"
                data-toggle="modal" data-target="#edit-gambar">
                <button title="masukan gamabar" ="" data-toggle="modal" data-target="#ubah-data" class="btn btn-warning ">
                <span class="fa fa-pencil-square-o"></span></button>                        
              </a>
              <a
                href="javascript:;"
                data-id="<?php echo $a->edukasi_id; ?>"
                data-judul="<?php echo $a->edukasi_title; ?>"
                data-jenis="<?php echo $a->edukasi_type; ?>"
                data-deskripsi="<?php echo $a->edukasi_desc; ?>"
                data-toggle="modal" data-target="#edit-data">
                <button title="Edit" ="" data-toggle="modal" data-target="#ubah-data" class="btn btn-info ">
                <span class="fa fa-pencil-square-o"></span></button>                        
              </a>
              <button title="hapus" type="button" class="btn btn-danger" onclick="hapus(<?php echo $a->edukasi_id;?>)"><div class="fa fa-trash" ></div></button>
           </td>
        </tr>
    <?php } ?>
     </tbody>
  </table>

</div>
</div>

<?php $this->load->view('admin/edukasi_edit_v'); ?>
<?php $this->load->view('admin/edukasi_picture_v'); ?>


