<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'location';

date_default_timezone_set('Africa/Cairo');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>SHOP</title>
    <style>
        body {
            text-align: center;
            margin: auto;
        }

        #map {
            /*width: 500px;*/
            height: 650px;
        }

        .centered {
            display: block;
            margin: auto;
            width: 90%;
        }
    </style>
</head>

<body>
    <div class=row>
        <h1>SHOPS IN CARMONA</h1>
    </div>
    
    

    <div class="row text-center centered">
        <div id="map"></div>
    </div>

    <div class=row>
        
    </div>

    <script>
        <?php
        if (isset($_POST['employee'])) {
            $sql = " SELECT * FROM locations3 where status='employee' ";
            $result = $conn->query($sql);
            while ($row1 = $result->fetch_assoc()) {
                $name = $row1['name'];
                $latitude = $row1['latitude'];
                $longitude = $row1['longitude'];
                $color = $row1['color'];
                $locations[] = array('<h4>' . $name . '</h4><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Carmona%2CBi%C3%B1an%2C_Lagunajf8982_12.JPG/280px-Carmona%2CBi%C3%B1an%2C_Lagunajf8982_12.JPG" height="100" width="100">', $latitude, $longitude, $color);
            }
        } elseif (isset($_POST['client'])) {
            $sql = " SELECT * FROM locations3 where status='client' ";
            $result = $conn->query($sql);
            while ($row1 = $result->fetch_assoc()) {
                $name = $row1['name'];
                $latitude = $row1['latitude'];
                $longitude = $row1['longitude'];
                $color = $row1['color'];
                $locations[] = array('<h4>' . $name . '</h4><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', $latitude, $longitude, $color);
            }
        } elseif (isset($_POST['car'])) {
            $sql = " SELECT * FROM locations3 where status='car' ";
            $result = $conn->query($sql);
            while ($row1 = $result->fetch_assoc()) {
                $name = $row1['name'];
                $latitude = $row1['latitude'];
                $longitude = $row1['longitude'];
                $color = $row1['color'];
                $locations[] = array('<h4>' . $name . '</h4><br/><p>Tel:07800054645</p><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', $latitude, $longitude, $color);
            }
        } elseif (isset($_POST['search'])) {
            $search_data = $conn->real_escape_string($_POST['search_data']);
            $range_start = $conn->real_escape_string($_POST['range_start']);
            $range_end = $conn->real_escape_string($_POST['range_end']);
            if (!empty($range_start)) {
                $sql = " SELECT * FROM locations3 where date between '$range_start' and '$range_end' ";
                $result = $conn->query($sql);
                while ($row1 = $result->fetch_assoc()) {
                    $name = $row1['name'];
                    $latitude = $row1['latitude'];
                    $longitude = $row1['longitude'];
                    $color = "orange-dot.png";
                    $locations[] = array('<h4>' . $name . '</h4><br/><p>Tel:07800054645</p><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', $latitude, $longitude, $color);
                }
            } else {
                $sql = " SELECT * FROM locations3 where name='$search_data' ";
                $result = $conn->query($sql);
                while ($row1 = $result->fetch_assoc()) {
                    $name = $row1['name'];
                    $latitude = $row1['latitude'];
                    $longitude = $row1['longitude'];
                    $color = "orange-dot.png";
                    $locations[] = array('<h4>' . $name . '</h4><br/><p>Tel:07800054645</p><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', $latitude, $longitude, $color);
                }
            }
        } else {
            $sql = ' SELECT * FROM locations3 ';
            $result = $conn->query($sql);
            while ($row1 = $result->fetch_assoc()) {
                $name = $row1['name'];
                $latitude = $row1['latitude'];
                $longitude = $row1['longitude'];
                $color = $row1['color'];
                 $status = $row1['status'];

                $locations[] = array('<h2>' . $name .'</h2> <br>  <br> <h3>' . $status . '</h3>', $latitude, $longitude, $color, );

          
          
            }
        }
        $data = json_encode($locations);
        ?>

        <?php
        echo "var data=$data;\n";

        ?>

        function initMap() {
            // Define your locations: HTML content for the info window, latitude, longitude
            var locations = [
                ['<h4>Obama</h4><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', -1.9802784, 30.0980199],
                ['<h4>Jared Leto</h4><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', -1.964880, 30.069333],
                ['<h4>Amanda Palmer</h4><img src="http://amandapalmer.net/wp-content/uploads/2013/09/1173818_10151647707218375_1357447411_n-300x200.png" height="100" width="100">', -1.9626765, 30.1080199],
                ['<h4>Random Girl</h4><img src="https://s-media-cache-ak0.pinimg.com/originals/62/71/76/627176b115aee264d92f7a33df1137d9.jpg" height="100" width="100">', -1.9702784, 30.1280199],
                ['<h4>Old Man</h4><img src="https://cdn.pixabay.com/photo/2014/05/22/16/57/face-351281_960_720.jpg" height="100" width="100">', -1.9802784, 30.0680199],
                ['<h4>RadioHead </h4> <img src="http://i1.kym-cdn.com/entries/icons/original/000/018/291/radiohead.jpg" height="100" width="100">', -1.9202784, 30.0880199],
                ['<h4>Oview data migration</h4> <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRnD3tNAqzahr3RHZvGa5m-REBWzbt6lijC0fRA2wxfS0tHJUvvpA" height="100" width="100">', -1.9502784, 30.1680199],
                ['<h4>Smile</h4><img src="https://cdn.pixabay.com/photo/2015/02/24/15/41/dog-647528__340.jpg" height="100" width="100">', -1.9402784, 30.0380199]
            ];

            // Setup the different icons and shadows
            var iconURLPrefix = 'https://maps.google.com/mapfiles/ms/icons/';

            var icons = [
                iconURLPrefix + 'red-dot.png',
                iconURLPrefix + 'green-dot.png',
                iconURLPrefix + 'blue-dot.png',
                iconURLPrefix + 'orange-dot.png',
                iconURLPrefix + 'purple-dot.png',
                iconURLPrefix + 'pink-dot.png',
                iconURLPrefix + 'yellow-dot.png'
            ]
            var iconsLength = icons.length;

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(-1.964880, 30.069333),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                /* option for satelate view*/
                streetViewControl: false,
                panControl: false,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_BOTTOM
                }
            });

            var infowindow = new google.maps.InfoWindow({
                maxWidth: 205
            });

            var markers = new Array();
            var iconCounter = 0;

            // Add the markers and infowindows to the map
            for (var i = 0; i < data.length; i++) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(data[i][1], data[i][2]),
                    map: map,
                    icon: 'https://maps.google.com/mapfiles/ms/icons/' + data[i][3]
                });

                markers.push(marker);

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(data[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));

                iconCounter++;
                // We only have a limited number of possible icon colors, so we may have to restart the counter
                if (iconCounter >= iconsLength) {
                    iconCounter = 0;
                }
            }

            function autoCenter() {
                //  Create a new viewpoint bound
                var bounds = new google.maps.LatLngBounds();
                //  Go through each...
                for (var i = 0; i < markers.length; i++) {
                    bounds.extend(markers[i].position);
                }
                //  Fit these bounds to the map
                map.fitBounds(bounds);
            }
            autoCenter();
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-ntkzWK3RNvjIhGVZNpzQAGgkHx2zeDc&callback=initMap"></script>
</body>

</html>
