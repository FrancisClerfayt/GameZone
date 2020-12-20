@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<h2>Trouvez votre chemin jusqu'à nous !</h2>
<section>
  <div class="">
  <p>Nous nous situons non loin de la frontiére Belge, dans les Hauts-De-France, plus précisément à Anzin !</p>
  <h4>Adresse</h4>
  <address class="">
    80 avenue Roland Moreno, 59410 Anzin
  </address>
  </div>
  <div id="carte"></div>
</section>
<div class="">
  <h4><i class="fas fa-train"></i>Se rendre au parc en train</h4>
  <p>La gare la plus proche se situe à Valenciennes, à quelques minutes de nous ! Retrouvez toutes les informations sur <a href="https://www.sncf.com/fr"></a></p>
</div>
<div class="">
  <h4><i class="fab fa-avianex"></i>Se rendre au parc en avion</h4>
  <p>Les aéroports les plus proches se situe a Lesquin, Charleroi et Bruxelles</p>
</div>
<div class="">
  <h4><i class="fas fa-car"></i>Venez jusqu'à nous avec notre partenaire Blabacar</h4>
  <p>Rendez-vous sur le site <a href="https://www.blablacar.fr/"></a> et profité d'une réduction de 10% avec le code "GAMEZONE" et venez vous amusez à prix réduit !</p>
</div>


<!-- Fichiers JS -->
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="{{ asset('js/geolocalisation.js') }}"></script>
@endsection
