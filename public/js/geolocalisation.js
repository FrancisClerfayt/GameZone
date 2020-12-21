navigator.geolocation.getCurrentPosition(showPosition);
let longitude = 0;
let latitude = 0;
function showPosition(position) {
  latitude = position.coords.latitude;
  longitude =position.coords.longitude;
  let carte = L.map("carte").setView([48.852969, 2.349903],13)
  L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png',).addTo(carte)
  L.routing.control({
    waypoints: [
      L.latLng(latitude, longitude ),
      L.latLng(50.374176, 3.518803)
    ],
    geocoder: L.Control.Geocoder.nominatim(),
    lineOptions: {
      styles: [{
        color: '#C9116A',
        opacity: 1,
      }]
    },
    router: new L.Routing.osrmv1({
      language: 'fr',
      profil: 'car',
    })
  }).addTo(carte)
}
