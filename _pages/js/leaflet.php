<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="crossorigin=""></script>

	<script src="assets/js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>

	<script src="assets/js/leaflet.ajax.js"></script>

	<script type="text/javascript">

		var map = L.map('mapid').setView([-7.559209, 110.7837924], 13);

		var LayerKita = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {

			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 18,
			id: 'mapbox/streets-v11',
			accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		});

		map.addLayer(LayerKita);

		var myStyle2 = {

			"color": "#ffff00",
			"weight": 1,
			"opacity": 0.9

		};

		function popUp(f,l){

			var out = [];
			if (f.properties) {

				// for(key in f.properties){
	        	// 	console.log(key);

	        	// }
	        	out.push("Provinsi: " + f.properties['PROVINSI']);
	        	out.push("Kecamatan: " + f.properties['KECAMATAN']);
	        	l.bindPopup(out.join("<br />"));
			}
		}

		// legend
		function iconByName(name) {

			return '<i class="icon" style="background-color:'+name+';border-radius:50%"></i>';
		}

		function featureToMarker(feature, latlng) {

			return L.marker(latlng, {

				icon: L.divIcon({

					className: 'marker-' + feature.properties.amenity,
					html: iconByName(feature.properties.amenity),
					iconUrl: '../images/markers/'+feature.properties.amenity+'.png',
					iconSize: [25, 41],
					iconAnchor: [12, 41],
					popupAnchor: [1, -34],
					shadowSize: [41, 41]
				})
			});
		}

		var baseLayers = [

			{
				name: "OpenStreetMap",
				layer: LayerKita
			},

			{
				name: "OpenCycleMap",
				layer: L.tileLayer('http://{s}.tile.opencyclemap.org/cycle/{z}/{x}/{y}.png')
			},

			{
				name: "Outdoors",
				layer: L.tileLayer('http://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png')
			}
		];

		<?php

			$getkec = $db->ObjectBuilder()->get('kecamatan');
			foreach ($getkec as $row) {
			?>

			var myStyle<?= $row->idkec ?> = {

				"color": "<?= $row->warkec ?>",
				"weight": 1,
				"opacity": 1
			};

			<?php

				$arrayKec[] = '{

					name: "'.$row->nama.'",
					icon: iconByName("'.$row->warkec.'"),
					layer: new L.GeoJSON.AJAX(["assets/unggah/gjson/'.$row->gjkec.'"],{onEachFeature:popUp,style: myStyle'.$row->idkec.',pointToLayer: featureToMarker }).addTo(map)
				}';
			}
		?>

		var overLayers = [{
		
			group: "Kecamatan",
			layers: [

				<?= implode(',', $arrayKec); ?>
			],

			group: "Kuburan";
			layers: [

				
			]
		}];

		var panelLayers = new L.Control.PanelLayers(baseLayers, overLayers, {
			
			collapsibleGroups: true
		});

		map.addControl(panelLayers);
	</script>