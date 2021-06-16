
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
			<?php echo $pecah['nama_wisata']?>
		</h3>
		<h4 style="margin-left: 700px ">Tentang <?php echo $pecah['nama_wisata']?> :</h4>
		
		<p></p>
		<div class="row">
			<div class="col-md-6">
				<img width="100%"  src="<?php echo base_url ()?>assets/img/<?php echo $pecah['foto_wisata']?>">
				
			</div>
			<div class="col-sm-6">
				<div class="mar-all">
					<div class="media">
						<div class="panel">
							<div class="panel-body">
								<span class="text-semibold"><?php echo $pecah['nama_wisata']?>  </span><span>
									<?php
									echo $pecah['deskripsi'] ?>
								</span>

							</div>

						</div>
						<div class="media-left">
							<i class="icon-lg icon-fw demo-pli-map-marker-2"></i>
						</div>
						<div class="media-body">
							<address>
								<strong style="margin-bottom: 5px" class="text-main">
									<?php echo $pecah['nama_wisata']?>
								</strong><br>
								<?php echo $pecah['alamat']?>
							</address>
						</div>
					</div>

					
					
					

					<div id="mapid" style="height:50vh;"></div>
					<script>
						var mapOptions = {
							center: [<?php echo $pecah['la'] ?>,<?php echo $pecah['lo'] ?>],
							zoom: 25
						}
						var mapid = new L.map('mapid', mapOptions);
						var marker = L.marker([<?php echo $pecah['la'] ?>,<?php echo $pecah['lo'] ?>]).addTo(mapid);
						marker.bindPopup("<b><?php echo $pecah['nama_wisata'] ?></b><br><?php echo $pecah['alamat'] ?>").openPopup();
						L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?access_token={accessToken}', {
							attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
							maxZoom: 18,
							id: 'mapbox.streets',
							accessToken: 'pk.eyJ1IjoicGF4aXRvdDE5OSIsImEiOiJja2Jmenp4M3MxMHA1MnhvNXl1cDdvaDQxIn0.qC-z0-WmnyfnWC8Yo_mQMg'
						}).addTo(mapid);
					</script>

				</div>
			</div>
		</div>
	</div>
</div>
<!---------------------------------->




