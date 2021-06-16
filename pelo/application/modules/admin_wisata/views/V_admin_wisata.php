<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Laporan Jurnal Harian</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Data</a></li>
    <li class="active">Data Jurnal</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
<div class="row pad-btm">
  <div class="col-sm-6 toolbar-left">

    <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-purple">tambah</button>

  </div>
 <?= form_open_multipart('admin_wisata/tambah'); ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pulau</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form enctype="multipart/form-data" method="post">


          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState">Nama Pulau</label>
              <input name="nama_p" type="text" class="form-control" >
            </div>

            <div class="form-group col-md-12">
              <label for="inputState">Foto:</label>
              <input name="gambar" type="file"  class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-12">
              <textarea style="width: 100%; height: 100px " class="form-control" name="ket_p" placeholder="KETERAGAN" ></textarea>
            </div>
          </div>
          <button style="margin-left: 450px" type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>

      <div class="modal-footer">


      </div>
    </div>
  </div>
</div>
<?= form_close(); ?>
<div class="col-sm-6 toolbar-right text-right">

  <div class="row pad-btm">


  </div>
</div>

<!-- Contact Toolbar -->



</div>
<!---------------------------------->

<!---------------------------------->


<div class="row">

<?php foreach ($tampil as $p) {?>
  <a href="<?php echo base_url('admin_wisata/detail_pulau/'. $p->id_pulau) ?>">
    <div class="col-md-4">

      <div class="panel widget">
        <div class="widget-header bg-purple">
          <img class="widget-bg img-responsive" src="<?php echo base_url ()?>assets/img/<?php echo $p->foto_pulau?>" alt="Image">
        </div>
        <div class="widget-body text-center">

          <h4 style="color: #040000" class="mar-no text-main"> 
            <?php echo $p->nama_pulau?>
          </h4>
          <p class="text-muted mar-no"><?php echo $p->tentang_pulau?> </p>
        </div>
      </div>


    </div>
  </a>
<?php }?>















</div>




