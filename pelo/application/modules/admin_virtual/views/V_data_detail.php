
<div class="row pad-btm">
  <div class="col-sm-6 toolbar-left">
    <button class="btn btn-default" onclick="goBack()">Kembali </button>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </div>

</div>



<!-- Contact Panel -->
<!---------------------------------->
<div class="panel">

  <div class="panel-body">

    <h3>
      <?php echo $pecah['nama_virtual']?>
    </h3>
    <h4 style="margin-left: 700px ">Tentang <?php echo $pecah['nama_virtual']?> :</h4>
    
    <p></p>
    <div class="row">
      <div class="col-md-6">
        <div style="width: 100%">
           <?php echo $pecah['frame']?>
        </div>
        
      </div>
      <div class="col-sm-6">
        <div class="mar-all">
          <div class="media">
            <div class="panel">
              <div class="panel-body">
                <span class="text-semibold"><?php echo $pecah['nama_virtual']?>  </span><span></span>

              </div>

            </div>
            <div class="media-left">
              <i class="icon-lg icon-fw demo-pli-map-marker-2"></i>
            </div>
            <div class="media-body">
              <address>
                <strong style="margin-bottom: 5px" class="text-main">
                  <?php echo $pecah['nama_virtual']?>
                </strong>
              </address>
            </div>

</div>

          
          
        
          

        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------------->




