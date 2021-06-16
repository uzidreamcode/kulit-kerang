<?php
    include 'koneksi.php';
    $ambil=$koneksi->query("SELECT * FROM wisata");
    $pecah=$ambil->fetch_assoc();
    $lo=$pecah['lo'];
    $la=$pecah['la'];
    $nama=$pecah['nama_wisata'];
    $alamat=$pecah['alamat'];
    ?>
    
<?php
    include 'koneksi.php';
    $ambil=$koneksi->query("SELECT * FROM wisata");
    
    $lo=$pecah['lo'];
    $la=$pecah['la'];
    $nama=$pecah['nama_wisata'];
    $alamat=$pecah['alamat'];
    ?>
       
    <div style="width: 100%; height: 60%; margin-top: 100px" id="map"></div>
    <script type="text/javascript">
        var mymap = L.map('map', {
    minZoom: 5,
    maxZoom: 5
}).setView([<?php echo $la?>,<?php echo $lo?>], 27);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data © OpenStreetMap contributors.',
            
        }).addTo(mymap);
        <?php 
       while ( $ii=$ambil->fetch_assoc()) {?>
        
        L.marker([<?php echo $ii['la'] ?>,<?php echo $ii['lo'] ?>]).bindPopup('<?php echo $ii['nama_wisata'] ?>').addTo(mymap);
      <?php }?>
    </script>