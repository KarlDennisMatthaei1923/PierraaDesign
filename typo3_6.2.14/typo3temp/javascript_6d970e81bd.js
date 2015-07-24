
(function ($, window, document, undefined) {
   $(function () {
    var gme = new Object();

    gme.zoomTypes = new Array(google.maps.ZoomControlStyle.DEFAULT,
                    google.maps.ZoomControlStyle.SMALL,
                    google.maps.ZoomControlStyle.LARGE);
    gme.defaultMapTypes = new Array(google.maps.MapTypeId.ROADMAP,
                    google.maps.MapTypeId.SATELLITE,
                    google.maps.MapTypeId.HYBRID,
                    google.maps.MapTypeId.TERRAIN,
                    "");

    gme.mapSettings = {
            id: 'gme-' + 1,
            title: 'Map',
            tooltipTitle: '',
            CSSClass: '',
            width: '300px',
            height: '400px',
            zoom: 0,
            minZoom: 0,
            maxZoom: 0,
            kmlUrl: '',
            kmlPreserveViewport: false,
            kmlLocal: 0,
            scrollZoom: 1,
            draggable: 1,
            doubleClickZoom: 0,
            markerCluster: 1,
            markerClusterZoom: null,
            markerClusterSize: null,
            markerSearch: 0,
            defaultType: 0,
            panControl: 1,
            scaleControl: 0,
            streetviewControl: 1,
            zoomControl: 1,
            zoomControlType: 0,
            mapTypeControl: 1,
            showRoute: 0,
            calcRoute: 0,
            travelMode: 0,
            unitSystem: 2,
            showForm: 0,
            showCategories: 0,
            styledMapName: '',
            
            styledMapCode: '',
                
            defaultZoom: 11
    }

    gme.mapSettings.mapTypes = new Array();
    
        gme.mapSettings.mapTypes[0] = gme.defaultMapTypes[0];
    
        gme.mapSettings.mapTypes[1] = gme.defaultMapTypes[1];
    
        gme.mapSettings.mapTypes[2] = gme.defaultMapTypes[2];
    

    gme.request = new Array();

    

    gme.addresses = new Array();
    

    gme.ll = {};
    gme.ll.alert = "Please enter a valid address.";
    gme.ll.submit = "Calculate Route";
    gme.ll.noSearchResults = "No results found.";
    gme.ll.infoWindowLinkText = "Calculate Route";
    var $element = jQuery("#" + gme.mapSettings.id);
    $element.gomapsext(gme);
    if(gme.mapSettings.width.indexOf('%') != -1) {
        jQuery(window).resize(function() {
            $element.trigger('mapresize');
        });
    }

  }); // end of closure
})(jQuery, window, document);
