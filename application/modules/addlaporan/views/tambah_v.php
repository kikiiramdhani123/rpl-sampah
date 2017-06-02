<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 400px;
      }
    </style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDa3U0FxRS3H3IosxPMOEKnZTBJIwxshE&v=3.exp&signed_in=true&libraries=places"></script>

<script>
function initialize() {
  var marker;
  var latlng = new google.maps.LatLng( -6.598258, 106.811458);
  var geocoder = new google.maps.Geocoder();
  var mapOptions = {
    center: latlng,
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    draggableCursor: "crosshair",
    streetViewControl: false
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  google.maps.event.addListener(map, "click", function (location) {
    map.setCenter(location.latLng);
    setLatLong(location.latLng.lat(), location.latLng.lng());

    marker.setMap(null);
    marker = new google.maps.Marker({
      position: location.latLng,
      map: map,
    });
    marker.setPosition(location.latLng);
    setGeoCoder(location.latLng);
  });

  var input = (document.getElementById('lokasi'));

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);
  autocomplete.setTypes([]);

  var infowindow = new google.maps.InfoWindow();
  marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    //infowindow.close();
    marker.setVisible(true);
    var place = autocomplete.getPlace();

    if (!place.geometry) return;

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(15);  // Why 17? Because it looks good.
    }
    marker.setIcon();
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);
    setLatLong(place.geometry.location.lat(), place.geometry.location.lng());

  });


  function setLatLong(lat, long) {
    document.getElementById('lat').value=lat;
    document.getElementById('long').value=long;
  }

  function setGeoCoder(pos) {
    geocoder.geocode({'location': pos}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          document.getElementById('lokasi').value=results[0].formatted_address;
        } else {
          document.getElementById('lokasi').value='';
        }
      } else {
        document.getElementById('lokasi').value='';
      }
    });
  }
}


google.maps.event.addDomListener(window, 'load', initialize);

</script>
  </head>
  <body class="page">
    <div id="page-content" role="main">
  <div class="container">
    <div id="content">
    <div class="container-out">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-inner">
              <form  id="contact-form" enctype="multipart/form-data" action="<?php echo base_url();?>addlaporan/tambah/upload" method="POST" >
                <div class="title">
                  <h2 class="h3">Tambah Laporan</h2>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label for="nama_kontak">Nama Pelapor<span class="require">(required)</span></label>
                      <input class="form-control" type="text" maxlength="100" name="nama_pelapor" id="nama_pelapor" minlength="2" required />
                    </div><!-- .form-field -->
                  </div><!-- .col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label for="email_kontak">Nomor Telepon<span class="require">(required)</span></label>
                      <input class="form-control" type="text" name="no_telp" id="no_telp" maxlength="12" required />
                    </div><!-- .form-field -->
                  </div><!-- .col-sm-6 -->
                  <div class="col-sm-12">
                      <div class="form-field">
                        <label for="nama_kontak">Lokasi<span class="require">(required)</span></label>
                        <input class="form-control" type="text" name="lokasi" id="lokasi" required /> 
                      </div><!-- .form-field -->
                  </div><!-- .col-sm-6 -->
                  <input type = "hidden" id="lat" disabled />
                  <input type = "hidden" id="long" disabled />
                  
                  <div class="col-sm-12">
                      <div class="form-field">
                        <div id="map-canvas"></div>
                      </div>
                  </div>
                </div><!-- .row -->
                <div class="form-field">
                  <label for="message">Deskripsi<span class="require">(required)</span></label>
                  <textarea class="form-control" maxlength="5000" rows="10" name="deskripsi" id="deskripsi" required></textarea>
                </div><!-- .form-field -->
                <div class="form-field">
                  <label for="nama_kontak">Foto<span class="require">(required)</span></label>
                            <input class="form-control" type="file" id="foto" name="foto" required />
                        </div><!-- .form-field -->
                          
                        <div class="form-field text-right">
                          <input type="submit" value="Laporkan" class="btn" id="btnSave">
                        </div><!-- .form-field -->
                      </form>

                    </div><!-- .form -->
                  </div><!-- .col-sm-7 -->

          
        </div><!-- .row -->
      </div><!-- .container-out -->

 
    </div><!-- /content -->
  </div><!-- /container -->
</div><!-- /page-content -->
  </body>
</html>

