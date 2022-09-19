<?php
include "koneksi.php";
include "header.php";
?>

<h3><span class="glyphicon glyphicon-map-marker"></span> Alamat SMK Muara Indonesia</h3>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-6.221215,106.892988),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-6.221215,106.892988),
      map: peta
  });
}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="googleMap" style="margin-top:60px; width:100%; height:380px;"></div>

<?php
include "footer.php";
?>