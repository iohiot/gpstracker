var map = (infoWindow = latitude = null);
var markersArray = [];
window.onload = function () {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      document.cookie = "latitude=" + position.coords.latitude;
      document.cookie = "longitude=" + position.coords.longitude;
    });
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), {
    center: new google.maps.LatLng(-6.2, 106.816666),
    zoom: 11,
    mapTypeId: "roadmap",
    gestureHandling: "greedy",
  });
  infoWindow = new google.maps.InfoWindow();
  livetracking();
  window.setInterval(livetracking, 3000);
};

function livetracking() {
  if ($("#group").attr("data-name") != 0) {
    var path =
      $("#base").val() +
      "/api/currentpositions?gr=" +
      $("#group").attr("data-name");
  } else {
    var path = $("#base").val() + "/api/currentpositions";
  }

  $.ajax({
    type: "GET",
    url: path,
    dataType: "json",
    cache: false,
    success: function (result) {
      if (result.status == 1) {
        var j;
        var markers = result.data;
        var bounds = new google.maps.LatLngBounds();
        resetMarkers(markersArray);
        for (i = 0; i < markers.length; i++) {
          var lastupdate = markers[i].time;

          baseUrl = "http://localhost/gpstracker/assets/marker/";
          v_type = {
                    path: fontawesome.markers.USER,
                    scale: 0.4,
                    strokeWeight: 0.2,
                    strokeColor: 'black',
                    strokeOpacity: 2,
                    fillColor: markers[i].v_color,
                    fillOpacity: 1.5
                  };
          if (markers[i].is_panic == 1)
          {
            v_type = {
                      url: baseUrl + "warning.gif",
                      scaledSize: new google.maps.Size(30, 30)
                    };
          } else if (markers[i].is_panic == 2)
          {
            v_type = {
                      url: baseUrl + "mandown.gif",
                      scaledSize: new google.maps.Size(30, 30)
                    };
          }

          var point = new google.maps.LatLng(
            parseFloat(markers[i].latitude),
            parseFloat(markers[i].longitude)
          );
          var html =
            "<div class=' '><b>" +
            "Name: </b>" +
            markers[i].v_name +
            "<br>" +
            "<b>Updated On: </b>" +
            lastupdate +
            "<br>" +
            "<br>" +
            "<a href='https://www.google.com/maps/search/?api=1&query=" +
            parseFloat(markers[i].latitude) +
            "," +
            parseFloat(markers[i].longitude) +
            "'>Direction >>>> </a>";
          ("<br></div>");
          var marker = new google.maps.Marker({
            map: map,
            position: point,
           // icon: v_type,
           icon: v_type,
            //BICYCLE,CAR,MOTORCYCLE,TRUCK
            //shadow : icon
          });
          markersArray.push(marker);
          bindInfoWindow(marker, map, infoWindow, html);
        }
      } else {
        alertmessage(result.message, 2);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log("Unexpected error.");
    },
  });
}
function resetMarkers(arr) {
  for (var i = 0; i < arr.length; i++) {
    arr[i].setMap(null);
  }
  arr = [];
}
function bindInfoWindow(marker, map, infoWindow, html) {
  google.maps.event.addListener(marker, "click", function () {
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
  });
}
function alertmessage(msg, type) {
  if (type == 1) {
    $.toast({
      heading: "Success",
      text: msg,
      icon: "info",
      loader: true,
      position: "top-center",
      loaderBg: "#2196f3",
      afterHidden: function () {
        location.reload();
      },
    });
  }
  if (type == 2) {
    $.toast({
      heading: "Error",
      text: msg,
      icon: "error",
      loader: true,
      position: "top-center",
      loaderBg: "#f44336",
    });
  }
}
