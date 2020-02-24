function load_map(){    

    let map = new ol.Map({
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        loadTilesWhileInteracting: true,
        target: 'map',
        view: new ol.View({
              center: ol.proj.transform([-104.8712, 21.4927], 'EPSG:4326', 'EPSG:3857'), //Tepic                                        
              zoom: 13,
              maxZoom:13, //maxZoom 19
              minZoom:2
        })
        
    });
   
    let features = [];

    var Markers = [
        {lat: 21.530915, lng: -104.882688},
        {lat: 21.515336, lng: -104.878830},
        {lat: 21.503762, lng: -104.900063}
    ];


    for (var i = 0; i < Markers.length; i++) {
        var item = Markers[i];
        var longitude = item.lng;
        var latitude = item.lat;

        var iconFeature = new ol.Feature({
            geometry: new ol.geom.Point(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857'))
        });

        var iconStyle = new ol.style.Style({
            image: new ol.style.Icon(({
                anchor: [0.5, 1],
                src: "http://cdn.mapmarker.io/api/v1/pin?text=P&size=50&hoffset=1"
            }))
        });

        iconFeature.setStyle(iconStyle);
        features.push(iconFeature);

    }

    var vectorSource = new ol.source.Vector({
        features: features
    });

    var vectorLayer = new ol.layer.Vector({
        source: vectorSource
    });
    map.addLayer(vectorLayer);
}