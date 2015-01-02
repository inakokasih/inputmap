<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <head>
        <meta http-equiv = "content-type" content = "text/html; charset=UTF-8" />
        <style type = "text/css">
            #map img {
                max-width: none;
            }
            #map label {
                width: auto; display:inline;
            }
        </style>
    </head>
    <body>
        <div id="map" style="width: 650px; height: 300px;"></div>
        <script type="text/javascript">
            var locations = [
<?php
//           include('inc/config.php');
$sql_lokasi = "select idlokasi,nama,lat,lng from lokasi";
$result = mysql_query($sql_lokasi) or die(mysql_error());
while ($data = mysql_fetch_object($result)) {
    ?>
                    ['<?php echo $data->nama; ?>', '<?php echo $data->lat; ?>', '<?php echo $data->lng; ?>'],
<?php } ?>
            ];
            console.log(locations);
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(-7.5561, 110.8317),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: 'icon_gs2.png'
                });
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        </script>
    </body>
</HTML>