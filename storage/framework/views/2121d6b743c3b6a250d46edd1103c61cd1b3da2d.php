<!DOCTYPE html>
<html>
<head>
	<title>Tugas batas desa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="src/leaflet.css">
	<script src="src/leaflet.js"></script>
	<script src="geojson/jago.js"></script>
	<style>
		html, body {
			height: 100%;
			width: 100%;
			margin:0;
			padding: 0;
		}
		#map {
			width: 100%;
			height:100%;
		}
		.leaflet-popup-content {
			width:auto !important;
		}

	</style>
</head>
<body>
    <div id="map"></div>


    <script>
    //     var mapIcon = L.Icon.extend({
	//     iconSize:     [32, 37]
	// });
    // var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' + 
    //              ' &copy; <a href="https://www.jihadul4kbar.github.io/">Jihadul Akbar</a>',
    //     mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiamloYWR1bDRrYmFyIiwiYSI6ImNqZ3lzOXpmaDA0bGQzMnJveGh5eW5lZjgifQ.IrFoCdc8VtGPQEzUFPqG_A';

    // var streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr}),
    //     grayscale   =  L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr});
    //     traffic = L.tileLayer(mbUrl, {id:'mapbox.mapbox-terrain-v2', attribution:mbAttr});
    //     jalanv8 = L.tileLayer(mbUrl, {id:'mapbox.mapbox-streets-v8', attribution:mbAttr});
    //     satellite = L.tileLayer(mbUrl, {id:'mapbox.satellite', attribution:mbAttr});
    var mapIcon = L.Icon.extend({
	    iconSize:     [32, 37]
	});
	// var masjidIcon = new mapIcon({iconUrl: 'icon/mosquee.png'}),
	//     sekolahIcon = new mapIcon({iconUrl: 'icon/school.png'});
	//     // kecamatanIcon = new mapIcon({iconUrl: 'icon/gbr2.png',  iconSize: [38, 50]});
	//     // tamanIcon = new mapIcon({iconUrl: 'icon/garden.png'});
	//     pasarIcon = new mapIcon({iconUrl: 'icon/market.png'});
	//     // kesehatanIcon = new mapIcon({iconUrl: 'icon/hospital.png'});
	//     // pemerintahanIcon = new mapIcon({iconUrl: 'icon/congress.png'});
	//     // wadukIcon = new mapIcon({iconUrl: 'icon/river-2.png'});


    // var peta = L.map('batasdesa', {
    //     // center: [-8.6416479, 116.3522657],
    //     center: [-8.6873968, 116.2817962],
    //     zoom: 50,
    //     layers: [ streets]
    // });
// var mapIcon = L.Icon.extend({
//         options: {
//             iconSize:     [30, 35],
//             iconAnchor:   [22, 94],
//             popupAnchor:  [-5, -90] 
//         }
//         });
    var masjidIcon = new mapIcon({iconUrl: 'icon/mosquee.png'}),
        pasarIcon = new mapIcon({iconUrl: 'icon/market.png'}),
        kantorIcon = new mapIcon({iconUrl: 'icon/office_building.png', iconSize: [38, 50]});
        hospitalIcon = new mapIcon({iconUrl: 'icon/hospital.png'});
        sekolahIcon = new mapIcon({iconUrl: 'icon/school.png'});
        kolamberenangIcon = new mapIcon({iconUrl: 'icon/swimming.png'});

   var kntor = L.marker([-8.6679542,116.2614505],{icon:kantorIcon})
    .bindPopup('<img src="asset/images/office_building.jpg" width="200px"><br>kantor desa Jago </br> <br> Kec. Praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');
	var kantor= L.layerGroup([kntor]);

    // L.marker([-8.6185221,116.1974688],{icon:hospitalIcon})
    // .bindPopup('Polindes desa Taman Indah');
// -

//Marker Sekolah
    var sklh1 = L.marker([-8.6499421,116.2668696],{icon:sekolahIcon})
    .bindPopup('<img src="asset/images/mts.jpg" width="200px"> <br> MTS ULIL ABSOR PANTI </br> <br> dusun panti, desa jago, Kec. Praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

    var sklh2 = L.marker([-8.6493006,116.2652079],{icon:sekolahIcon})
    .bindPopup('<img src="asset/images/smkulilabsor.jpg" width="200px"> <br> SMK ALABSOR PANTI <br> dudun panti, desa jago, Kec. praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');
 
	var sklh3 = L.marker([-8.6688855,116.2598243],{icon:sekolahIcon})
    .bindPopup('<img src="asset/images/smpn5.jpg" width="200px"> <br> SMPN 5 PRAYA <br> jago, Kec. praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');
 
	var sklh4 = L.marker([-8.6741694,116.2577383],{icon:sekolahIcon})
    .bindPopup('<img src="asset/images/Sd.jpg" width="200px"> <br> SDN bundua <br> bendua, Kec. praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	var sklh5 = L.marker([-8.6530552,116.2659416],{icon:sekolahIcon})
    .bindPopup('<img src="asset/images/Sd.jpg" width="200px"> <br> yayasan pondok pesantren darul <br> bunsalak, Kec. praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	
    var sekolah = L.layerGroup([sklh1, sklh2, sklh3, sklh4, sklh5]);

//   L.marker([-8.6903015,116.2458821],{icon:sekolahIcon})
//     .bindPopup('ponpes jihadul ummah lombok tengah');

    var mj1 = L.marker([-8.6652575,116.2677131],{icon: masjidIcon})
    .bindPopup('<img src="asset/images/masjid.jpg" width="200px"><br> Masjid at-taubah lendang </br> <br> jago, jago , kec. praya , kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	var mj2 = L.marker([-8.6615983,116.2608466],{icon: masjidIcon})
    .bindPopup('<img src="asset/images/masjidd.jpg" width="200px"><br> Masjid Al firdaus </br> <br> panti, jago , kec. praya , kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	var mj3 = L.marker([-8.6657566,116.2633434],{icon: masjidIcon})
    .bindPopup('<img src="asset/images/masjidd.jpg" width="200px"><br> Masjid nurul  </br> <br> bunsalak, jago , kec. praya , kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	var mj4 = L.marker([-8.6638893,116.2658677],{icon: masjidIcon})
    .bindPopup('<img src="asset/images/masjidd.jpg" width="200px"><br> Masjid nurul iman johar  </br> <br> jago, jago , kec. praya , kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	var mj5 = L.marker([-8.6732785,116.2578134],{icon: masjidIcon})
    .bindPopup('<img src="asset/images/masjidd.jpg" width="200px"><br> Masjid nurul ijtihad  </br> <br> bundue, jago , kec. praya , kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511 </br>');

	var masjid = L.layerGroup([mj1, mj2, mj3, mj4, mj5]); 

    var toko1 =  L.marker([-8.6543455,116.2651557],{icon: pasarIcon})
    .bindPopup('<img src="asset/images/noky.jpg" width="200px"><br> Noky Drink </br> <br> bunsalak, jago, Kec. Praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511</br>');
  
    var toko2 =  L.marker([-8.6542227,116.2647621],{icon: pasarIcon})
    .bindPopup('<img src="asset/images/donat.jpg" width="200px"><br> kios danat yana </br> <br> jago, praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511</br>');

	var toko3 =  L.marker([-8.6701258,116.263561],{icon: pasarIcon})
    .bindPopup('<img src="asset/images/donat.jpg" width="200px"><br> bale grosir </br> <br> jago, praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511</br>');

	var toko4 =  L.marker([-8.6725891,116.2571912],{icon: pasarIcon})
    .bindPopup('<img src="asset/images/donat.jpg" width="200px"><br> warung bakso </br> <br> jago, praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511</br>');

	var toko5 =  L.marker([-8.6725891,116.2571912],{icon: pasarIcon})
    .bindPopup('<img src="asset/images/donat.jpg" width="200px"><br> kios yeni </br> <br> jago, praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511</br>');

	var toko6 =  L.marker([-8.6725891,116.2571912],{icon: pasarIcon})
    .bindPopup('<img src="asset/images/donat.jpg" width="200px"><br> kios yeni </br> <br> jago, praya, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83511</br>');

	
	var pasar = L.layerGroup([toko1, toko2, toko3, toko4, toko5, toko6]); 
    
	//##############################################//
	// Membuat BaseMap Pada Peta
	//##############################################//

	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

	//##############################################//
	// Mendeklarasikan Peta kedalam Id Map
	//##############################################//
	var map = L.map('map', {
		center: [-8.6416479, 116.3522657],
		zoom: 13,
		layers: [streets]
	});

	//##############################################//
	// Mendeklarasikan BaseLayer Pada Map yakni Street
	//##############################################//
	var baseLayers = {
		"Streets": streets
	};


 	//##############################################//
	// Deklarasi untuk memilih Icon yang akan ditampilkan
	//##############################################//
	var overlays = {
		"Masjid": masjid,
		"Sekolah": sekolah,
		"Pasar" : pasar,
		"Kantor" : kantor,
    };

	//##############################################//
	// Menambah  variabel baselayaer dan overlay kedalam map
	//##############################################//
	L.control.layers(baseLayers, overlays).addTo(map);


	L.geoJSON([jago], {
		style: function (feature) {
			return feature.properties && feature.properties.style;
		}
	}).addTo(map);

    // var baseLayers = {
    //     "Jalan": streets,
        // "Hitam Putih": grayscale,
        // "Trapik": traffic,
        // "Jalanv8": jalanv8,
        // "Satellite": satellite,
        
    // };
    // var overlays = {
    //     "Masjid": masjid
    // };

    // L.control.layers(baseLayers);

    	//##############################################//
	// Membuat BaseMap Pada Peta
	//##############################################//

	
	//##############################################//
	// Mendeklarasikan Peta kedalam Id Map
	//##############################################//


	//##############################################//
	// Mendeklarasikan BaseLayer Pada Map yakni Street
	//##############################################//
	// var baseLayers = {
	// 	"Streets": streets
	// };


 

   

    //##############################################//
	// Menambah  variabel baselayaer dan overlay kedalam map
	//##############################################//
	// L.control.layers(baseLayers, overlays).addTo(batasdesa);

//##############################################//
// Menbambil data geospesial wilayak kecamatan praya
//##############################################//
L.geoJSON([jago], {
    style: function (feature) {
        return feature.properties && feature.properties.style;
   }
 }).addTo(map);

    
    </script>
</body>
</html><?php /**PATH C:\Users\dinaf\Gis_web\resources\views/welcome.blade.php ENDPATH**/ ?>