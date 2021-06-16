
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
		<button class="btn btn-default" onclick="goBack()">Kembali </button>
		<script>
			function goBack() {
				window.history.back();
			}
		</script>
	</div>

</div>
<div class="col-lg-12">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Input size</h3>
		</div>


		<!--Input Size-->
		<!--===================================================-->
			<?= form_open_multipart('admin_wisata/edit_ww/'.$detail['id_pulau']); ?>
			<div class="panel-body"><div class="form-group">

				<div style="margin-bottom: 20px" class="col-sm-9">
					<input type="text" placeholder="Nama Pariwisata" value="<?php echo $detail['nama_wisata']?> " name="nama" class="form-control input-lg" id="demo-is-inputnormal">
					<input type="hidden" value="<?php echo $detail['id_wisata']?>" name="idw">
					<input type="hidden" value="<?php echo $detail['id_pulau']?>" name="id_pulau">
				</div>
				<div style="margin-bottom: 20px" class="col-sm-3"><div class="select">
					<select name="kategori" style="height: 48px">
						<option value="Pantai">Pantai</option>
						<option value="Gunung">Gunung</option>
						<option value="Paralayang">Paralayang</option>
						<option value="Air Terjun">Air Terjun</option>
						<option value="Museum">Museum</option>
						<option value="Monumen">Monumen</option>
						<option value="Tugu">Tugu</option>
						<option value="candi">Candi</option>
					</select>
				</div></div>
				<div style="margin-bottom: 20px" class="col-sm-6">
					<input type="file" name="gambar" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">
				</div>
				<div style="margin-bottom: 20px" class="col-sm-6">
					<input type="text" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">
				</div>
				<input type="hidden" name="lon" id="lon"   size=12 value="" class="form-control" id="inputCity">


				<input type="hidden" name="lat" id="lat"   size=12 value=""
				class="form-control" id="inputCity">


				<div class="col-md-6">
					<textarea placeholder="deskripsi" class="form-control" id="inputCity" name="deskripsi" style=" width: 100%; height: 100px; margin-bottom: 20px"><?php echo $detail['deskripsi']?></textarea>
				</div>
				<div class="col-md-6">
					<div id="search">
						<input type="text" name="addr" class="form-control" value="" id="addr" size="58" />
						<button type="button" onclick="addr_search();">Search</button>
						<div id="results"></div>
					</div>
				</div>
				<div id="map"></div>
				<style type="text/css">
					html, body { width:100%;padding:0;margin:0; }
					.container { width:100%;max-width:980px;padding:1% 2%;margin:0 auto }
					#lat, #lon { text-align:right }
					#map { width:100%;height:225px;padding:0;margin:0; }
					.address { cursor:pointer }
					.address:hover { color:#AA0000;text-decoration:underline }
				</style>
				<div style="margin-top: 20px" class="col-md-12">
					<textarea class="form-control" id="inputCity" name="alamat" style="height: 100px; width:100%;"><?php echo $detail['alamat']?></textarea>

				</div>

			</div></div>
			<div class="panel-footer">
				<div class="row">
					<div>
						<button onclick="goBack()" name="tambah" class="btn btn-mint" type="submit">Tambah</button>

					</div>
				</div>
			</div>
		<?= form_close(); ?>

		<!--===================================================-->
		<!--End Input Size-->


	</div>
</div>
<script type="text/javascript">


// New York
var startlat = <?php echo $detail['la']?>;
var startlon = <?php echo $detail['lo']?>;;

var options = {
	center: [startlat, startlon],
	zoom: 9
}

document.getElementById('lat').value = startlat;
document.getElementById('lon').value = startlon;

var map = L.map('map', options);
var nzoom = 12;

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

var myMarker = L.marker([startlat, startlon], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
	var lat = myMarker.getLatLng().lat.toFixed(8);
	var lon = myMarker.getLatLng().lng.toFixed(8);
	var czoom = map.getZoom();
	if(czoom < 18) { nzoom = czoom + 2; }
	if(nzoom > 18) { nzoom = 18; }
	if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
	document.getElementById('lat').value = lat;
	document.getElementById('lon').value = lon;
	myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
});

function chooseAddr(lat1, lng1)
{
	myMarker.closePopup();
	map.setView([lat1, lng1],18);
	myMarker.setLatLng([lat1, lng1]);
	lat = lat1.toFixed(8);
	lon = lng1.toFixed(8);
	document.getElementById('lat').value = lat;
	document.getElementById('lon').value = lon;
	myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
}

function myFunction(arr)
{
	var out = "<br />";
	var i;

	if(arr.length > 0)
	{
		for(i = 0; i < arr.length; i++)
		{
			out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");return false;'>" + arr[i].display_name + "</div>";
		}
		document.getElementById('results').innerHTML = out;
	}
	else
	{
		document.getElementById('results').innerHTML = "Sorry, no results...";
	}

}

function addr_search()
{
	var inp = document.getElementById("addr");
	var xmlhttp = new XMLHttpRequest();
	var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
	xmlhttp.onreadystatechange = function()
	{
		if (this.readyState == 4 && this.status == 200)
		{
			var myArr = JSON.parse(this.responseText);
			myFunction(myArr);
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}


</script>

