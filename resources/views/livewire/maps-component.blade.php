<div class="container-fluid">
        <div id="map" class="lg:mt-[100px] mt-[50px] lg:w-[2000px] w-full"></div>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            const stations = @json($stations);
            
            var map = L.map('map').setView([-4.628757657193269, 122.33816943962901], 5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            stations.forEach(station => {
                var lat = station.latitude;
                var long = station.longitude;
                var customIcon = L.icon({
                    iconUrl: '{{ URL::asset('img/railway.svg') }}',
                    iconSize: [38, 95],
                    iconAnchor: [22, 94],
                    popupAnchor: [-3, -76]
                });
                L.marker([lat, long], {icon: customIcon}).addTo(map);
            });

        </script>
</div>